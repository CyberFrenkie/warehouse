<?php

namespace App\Http\Controllers;

use App\Models\In;
use App\Models\Stock;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelController extends Controller
{
    

    public function showForm()
    {
        return view('upload.form');
    }



    public function upload(Request $request)
    {
        // Validate the uploaded file
        $validator = Validator::make($request->all(), [
            'excel_file' => 'required|mimetypes:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Retrieve the uploaded file
        $file = $request->file('excel_file');

        // Load the Excel file
        $spreadsheet = IOFactory::load($file);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();

        // Remove the header row
        array_shift($rows);

        // Iterate over the rows and insert non-empty data into the database
        foreach ($rows as $row) {
            if (array_filter($row)) {
                $inItem = IN::create([
                    'order_number' => $row[0] ?? null,
                    'name_SH' => $row[1] ?? null,
                    'name_EN' => $row[2] ?? null,
                    'manufacturer' => $row[4] ?? null,
                    'model' => $row[3] ?? null,
                    'location' => $row[5] ?? null,
                    'sap_number' => $row[6] ?? null,
                    'unit' => $row[7] ?? null,
                    'stock_count' => $row[8] ?? null,
                    'use' => $row[9] ?? null,
                ]);

                $existingStockItem = Stock::where('name_SH', $row[1])
                    ->where('name_EN', $row[2])
                    ->where('manufacturer', $row[4])
                    ->where('model', $row[3])
                    ->where('location', $row[5])
                    ->where('sap_number', $row[6])
                    ->first();

                if ($existingStockItem) {
                    $existingStockItem->increment('stock_count', $row[8] ?? null);
                } else {
                    Stock::create([
                        'order_number' => $row[0] ?? null,
                        'name_SH' => $row[1] ?? null,
                        'name_EN' => $row[2] ?? null,
                        'manufacturer' => $row[4] ?? null,
                        'model' => $row[3] ?? null,
                        'location' => $row[5] ?? null,
                        'sap_number' => $row[6] ?? null,
                        'unit' => $row[7] ?? null,
                        'stock_count' => $row[8] ?? null,
                        'use' => $row[9] ?? null,
                    ]);
                }
            }
        }

        return redirect()->route('in.index')->with('success', 'Data uploaded successfully.');
    }


    public function export()
    {
        // Fetch the data from the database
        $stockItems = Stock::all();

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set the column headers
        $sheet->setCellValue('A1', 'Order Number');
        $sheet->setCellValue('B1', 'Name SH');
        $sheet->setCellValue('C1', 'Name EN');
        $sheet->setCellValue('D1', 'Manufacturer');
        $sheet->setCellValue('E1', 'Model');
        $sheet->setCellValue('F1', 'Location');
        $sheet->setCellValue('G1', 'SAP Number');
        $sheet->setCellValue('H1', 'Unit');
        $sheet->setCellValue('I1', 'Stock Count');
        $sheet->setCellValue('J1', 'Use');

       

        // Iterate over the data and populate the rows
        $row = 2; // Start from row 2 (below the headers)
        foreach ($stockItems as $item) {
            $sheet->setCellValue('A' . $row, $item->order_number);
            $sheet->setCellValue('B' . $row, $item->name_SH);
            $sheet->setCellValue('C' . $row, $item->name_EN);            
            $sheet->setCellValue('E' . $row, $item->manufacturer);
            $sheet->setCellValue('D' . $row, $item->model);
            $sheet->setCellValue('F' . $row, $item->location);
            $sheet->setCellValue('G' . $row, $item->sap_number);
            $sheet->setCellValue('H' . $row, $item->unit);
            $sheet->setCellValue('I' . $row, $item->stock_count);
            $sheet->setCellValue('J' . $row, $item->use);

            $row++; 
        }

        // Create a new Excel writer and save the file
        $writer = new Xlsx($spreadsheet);
        $filename = 'stock_items.xlsx';
        $writer->save($filename);
        
        return response()->download($filename)->deleteFileAfterSend();
    }
}
