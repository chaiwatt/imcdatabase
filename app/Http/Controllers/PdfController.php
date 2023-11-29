<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Problem;
use Illuminate\Http\Request;
use Mccarlosen\LaravelMpdf\LaravelMpdf;

class PdfController extends Controller
{
    
    public function generateBook($bookId)
    {
        $bookName = ['book-one','book-two','book-three','book-four','book-five','book-six'];
        $studentName = 'ณัฎฐพัชร์ ทวีจันทร์';
        $studentNickname = 'โปรแกรม';
        $branch = 'ลำพูน';
        $problems = Problem::where('book_id',$bookId)->get();
        
        $data = ['problems' => $problems,'studentName'=> $studentName, 'studentNickname' => $studentNickname , 'branch' => $branch];
        // dd(('/assets/images/fingers/bg.png'));
        $pdf = PDF::loadView($bookName[$bookId-1],$data,[],[
            // 'watermark' => $studentName,
            'watermark_image_path' => base_path('public/assets/images/fingers/bg.png'),
            // 'show_watermark' => true,
            'show_watermark_image' => true,
        ]);
         return $pdf->stream($bookName[$bookId-1] . '.pdf');
    }
}
