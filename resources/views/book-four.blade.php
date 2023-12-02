<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1252">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style type="text/css">
        body {
            font-family: 'kanit', 'sarabun';
        }

        header {
            margin-top: -40px;
            text-align: center;
            padding: 10px 10px -15px 10px;
            /* ปรับ padding-top จาก 10px เป็น 5px */
            font-size: 14px;

            border-bottom: 1px solid #808080;
        }

        header p {
            color: #808080
        }



        .card {
            width: 80%;
            line-height: 10px;
            margin: auto;
            background-color: #ffeb3b;
            border-radius: 15px;
            margin-top: 20px;
            border: 2px solid #000000;
            padding-bottom: -5px;

        }

        .card h2 {
            font-weight: bold
        }

        h2 {
            text-align: center;
            font-size: 2.0em;
            font-weight: 100;
            font-family: 'sarabun';
            line-height: 10px;
        }

        .title {
            line-height: 10px;
            font-size: 28px;
            font-family: 'sarabun';
            line-height: 10px;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin-left: 20px;
        }

        table img {
            width: 10% !important;
            display: block;
            margin: auto;
        }

        .img120px {
            width: 120px !important;
        }

        .img165px {
            width: 165px !important;
        }

        .studentname {
            font-weight: 600;
            font-size: 20px;
            font-family: 'sarabun';
            line-height: 10px;
        }

        th,
        td {
            text-align: center;
            padding: 10px;
            font-size: 1.2em;
            font-weight: bold;
        }

        .page-break {
            page-break-after: always;
        }

        .bigfont {
            font-size: 4.5em;
            font-weight: bold;
        }

        .td-problem-style {
            border: 1px solid black;
            text-align: right;
            font-size: 24px;
            font-weight: 100;
            line-height: 20px
        }

        .solid-under-line {
            height: 50px;
            font-weight: 100;
            width: 150px;
            border-bottom: 1px solid #000;
            text-align: left;
            padding-bottom: -15px;
            padding-left: -10px
        }

        .td-answer-style {
            border: 1px solid black;
            border-top: 2px solid black;
            text-align: right;
            font-size: 24px;
            font-weight: 100;
            height: 40px;
            color: red
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: right;
            font-size: 14px;
            margin-bottom: 10px;
            margin-right: 50px;
            font-style: italic;
            color: #808080;
            font-weight: 100;
        }
    </style>
    <title>ฟิงเกอร์แมท เล่ม 3</title>
</head>

<body>
    <header>
        <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
    </header>
    <div class="card">
        <h2>การบวกลบโดยใช้ลูกคิด</h2>
    </div>


    <img style="height:335px; margin-left:80px;margin-top:15px;" src="assets/images/fingers/frame.png" alt="hand">

    <div style="text-align: left;margin-top:20px ">
        <h2 style="text-decoration: underline;font-weight:bold;font-family:'sarabun">
            ส่วนประกอบของลูกคิดที่สำคัญ</h2>
    </div>
    <table style="width: 90%;margin-left:80px;margin-top:10px">
        <tr style="">
            <th style="font-size: 34px;font-family:'sarabun';border-bottom: 1px solid #080808;padding-bottom:0px">
                หมายเลข
            </th>
            <th style="font-size: 34px;font-family:'sarabun' ;border-bottom: 1px solid #080808;padding-bottom:0px">
                ความหมาย</th>
        </tr>


        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:60px">
                1
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:40px;font-family:'sarabun;line-height:30px;padding-top:20px">
                ลูกคิดบน มีค่า 5, 50, 500... เพิ่มขึ้นตามหลักทางซ้าย</td>
        </tr>
        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:60px">
                2
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:40px;font-family:'sarabun;line-height:30px;padding-top:20px">
                ลูกคิดล่าง มีค่า 1, 10, 100... เพิ่มขึ้นตามหลักทางซ้าย</td>
        </tr>



        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:60px">
                3
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:40px;font-family:'sarabun;line-height:30px;padding-top:20px">
                จุดอ้างอิงสำหรับบอกตำแหน่ง</td>
        </tr>

    </table>


    <div style="text-align: left;margin-top:25px ">
        <h2 style="text-decoration: underline;font-weight:bold;font-family:'sarabun">
            การเทียบค่าลูกคิดกับนิ้วมือ </h2>
    </div>

    <div style="text-align: left;margin-top:10px ">
        <h2>ลูกคิดเม็ดบน มีค่าเทียบกับ <span
                style="color:red;font-weight:bold;font-family:'sarabun;font-size:36px">นิ้วโป้ง</span>
        </h2>
    </div>
    <div style="text-align: left;margin-top:10px ">
        <h2>ลูกคิดเม็ดล่าง มีค่าเทียบกับ <span
                style="color:red;font-weight:bold;font-family:'sarabun;font-size:36px">นิ้วชี้ กลาง นาง
                ก้อย</span> ตามลำดับ
        </h2>
    </div>

    {{-- <div style="text-align: left;margin-top:10px ">
        <h2>
            นักเรียนต้อง <span style="color:red;font-weight:bold;font-size:40px">"จำสูตร"</span> ให้แม่น
        </h2>
    </div> --}}

    <div class="footer">สงวนลิขสิทธ์ ©สถาบันคณิตศาสตร์ไอแมคโซโรบัน ห้ามเผยแพร่</div>

    <div class="page-break"></div>
    {{-- เริ่มหน้าใหม่ --}}
    <header>
        <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
    </header>
    <div class="card">
        <h2>ใช้ลูกคิด บวกและการลบโดยตรง</h2>
    </div>
    {{-- <div style="margin-top: 10px;margin-left:50px">
        <span style="font-size: 20px">แบบฝึกหัดที่ 1 ให้นักเรียนใช้นิ้วมือในการคิดคำตอบ</span>
    </div> --}}
    <table style="margin-top:15px;margin-left:70px; border:solid 1px black">
        <tr style="margin-bottom: 10px; text-align: center;">
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ1</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ2</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ3</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ4</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ5</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ6</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ7</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ8</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ9</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ10</td>
        </tr>
        @foreach ($problems->where('proplem_table_id',1) as $problem)
        <tr>
            <td class="td-problem-style">{{$problem->problem_1}}</td>
            <td class="td-problem-style">{{$problem->problem_2}}</td>
            <td class="td-problem-style">{{$problem->problem_3}}</td>
            <td class="td-problem-style">{{$problem->problem_4}}</td>
            <td class="td-problem-style">{{$problem->problem_5}}</td>
            <td class="td-problem-style">{{$problem->problem_6}}</td>
            <td class="td-problem-style">{{$problem->problem_7}}</td>
            <td class="td-problem-style">{{$problem->problem_8}}</td>
            <td class="td-problem-style">{{$problem->problem_9}}</td>
            <td class="td-problem-style">{{$problem->problem_10}}</td>
        </tr>
        @endforeach

        <tr>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
        </tr>

    </table>
    <table style="margin-top:25px;margin-left:70px; border:solid 1px black">
        <tr style="margin-bottom: 10px; text-align: center;">
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ1</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ2</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ3</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ4</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ5</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ6</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ7</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ8</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ9</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ10</td>
        </tr>
        @foreach ($problems->where('proplem_table_id',2) as $problem)
        <tr>
            <td class="td-problem-style">{{$problem->problem_1}}</td>
            <td class="td-problem-style">{{$problem->problem_2}}</td>
            <td class="td-problem-style">{{$problem->problem_3}}</td>
            <td class="td-problem-style">{{$problem->problem_4}}</td>
            <td class="td-problem-style">{{$problem->problem_5}}</td>
            <td class="td-problem-style">{{$problem->problem_6}}</td>
            <td class="td-problem-style">{{$problem->problem_7}}</td>
            <td class="td-problem-style">{{$problem->problem_8}}</td>
            <td class="td-problem-style">{{$problem->problem_9}}</td>
            <td class="td-problem-style">{{$problem->problem_10}}</td>
        </tr>
        @endforeach
        <tr>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
        </tr>

    </table>
    <table style="margin-top:25px;margin-left:70px; border:solid 1px black">
        <tr style="margin-bottom: 10px; text-align: center;">
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ1</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ2</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ3</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ4</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ5</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ6</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ7</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ8</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ9</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ10</td>
        </tr>
        @foreach ($problems->where('proplem_table_id',3) as $problem)
        <tr>
            <td class="td-problem-style">{{$problem->problem_1}}</td>
            <td class="td-problem-style">{{$problem->problem_2}}</td>
            <td class="td-problem-style">{{$problem->problem_3}}</td>
            <td class="td-problem-style">{{$problem->problem_4}}</td>
            <td class="td-problem-style">{{$problem->problem_5}}</td>
            <td class="td-problem-style">{{$problem->problem_6}}</td>
            <td class="td-problem-style">{{$problem->problem_7}}</td>
            <td class="td-problem-style">{{$problem->problem_8}}</td>
            <td class="td-problem-style">{{$problem->problem_9}}</td>
            <td class="td-problem-style">{{$problem->problem_10}}</td>
        </tr>
        @endforeach

        <tr>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
        </tr>

    </table>
    <div class="footer">สงวนลิขสิทธ์ ©สถาบันคณิตศาสตร์ไอแมคโซโรบัน ห้ามเผยแพร่</div>

    <div class="page-break"></div>
    {{-- เริ่มหน้าใหม่ --}}
    <header>
        <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
    </header>

    {{-- <div style="margin-top: 20px;margin-left:50px">
        <span style="font-size: 20px">แบบฝึกหัดที่ 2 ให้นักเรียนใช้นิ้วมือในการคิดคำตอบ</span>
    </div> --}}
    <table style="margin-top:25px;margin-left:70px; border:solid 1px black">
        <tr style="margin-bottom: 10px; text-align: center;">
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ1</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ2</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ3</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ4</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ5</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ6</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ7</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ8</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ9</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ10</td>
        </tr>
        @foreach ($problems->where('proplem_table_id',4) as $problem)
        <tr>
            <td class="td-problem-style">{{$problem->problem_1}}</td>
            <td class="td-problem-style">{{$problem->problem_2}}</td>
            <td class="td-problem-style">{{$problem->problem_3}}</td>
            <td class="td-problem-style">{{$problem->problem_4}}</td>
            <td class="td-problem-style">{{$problem->problem_5}}</td>
            <td class="td-problem-style">{{$problem->problem_6}}</td>
            <td class="td-problem-style">{{$problem->problem_7}}</td>
            <td class="td-problem-style">{{$problem->problem_8}}</td>
            <td class="td-problem-style">{{$problem->problem_9}}</td>
            <td class="td-problem-style">{{$problem->problem_10}}</td>
        </tr>
        @endforeach
        <tr>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
        </tr>

    </table>
    <table style="margin-top:25px;margin-left:70px; border:solid 1px black">
        <tr style="margin-bottom: 10px; text-align: center;">
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ1</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ2</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ3</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ4</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ5</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ6</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ7</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ8</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ9</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ10</td>
        </tr>
        @foreach ($problems->where('proplem_table_id',5) as $problem)
        <tr>
            <td class="td-problem-style">{{$problem->problem_1}}</td>
            <td class="td-problem-style">{{$problem->problem_2}}</td>
            <td class="td-problem-style">{{$problem->problem_3}}</td>
            <td class="td-problem-style">{{$problem->problem_4}}</td>
            <td class="td-problem-style">{{$problem->problem_5}}</td>
            <td class="td-problem-style">{{$problem->problem_6}}</td>
            <td class="td-problem-style">{{$problem->problem_7}}</td>
            <td class="td-problem-style">{{$problem->problem_8}}</td>
            <td class="td-problem-style">{{$problem->problem_9}}</td>
            <td class="td-problem-style">{{$problem->problem_10}}</td>
        </tr>
        @endforeach
        <tr>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
        </tr>

    </table>
    <table style="margin-top:25px;margin-left:70px; border:solid 1px black">
        <tr style="margin-bottom: 10px; text-align: center;">
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ1</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ2</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ3</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ4</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ5</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ6</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ7</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ8</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ9</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ10</td>
        </tr>
        @foreach ($problems->where('proplem_table_id',6) as $problem)
        <tr>
            <td class="td-problem-style">{{$problem->problem_1}}</td>
            <td class="td-problem-style">{{$problem->problem_2}}</td>
            <td class="td-problem-style">{{$problem->problem_3}}</td>
            <td class="td-problem-style">{{$problem->problem_4}}</td>
            <td class="td-problem-style">{{$problem->problem_5}}</td>
            <td class="td-problem-style">{{$problem->problem_6}}</td>
            <td class="td-problem-style">{{$problem->problem_7}}</td>
            <td class="td-problem-style">{{$problem->problem_8}}</td>
            <td class="td-problem-style">{{$problem->problem_9}}</td>
            <td class="td-problem-style">{{$problem->problem_10}}</td>
        </tr>
        @endforeach

        <tr>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
        </tr>

    </table>
    <div class="footer">สงวนลิขสิทธ์ ©สถาบันคณิตศาสตร์ไอแมคโซโรบัน ห้ามเผยแพร่</div>

    <div class="page-break"></div>
    {{-- เริ่มหน้าใหม่ --}}
    <header>
        <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
    </header>
    <div class="card">
        <h2>จับเวลา: ใช้ลูกคิด บวกและการลบโดยตรง</h2>
    </div>

    <table style="margin-top:15px;margin-left:70px; border:solid 1px black;margin-bottom:15px">
        <tr style="margin-bottom: 10px; text-align: center;">
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ1</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ2</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ3</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ4</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ5</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ6</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ7</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ8</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ9</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ10</td>
        </tr>
        @foreach ($problems->where('proplem_table_id',7) as $problem)
        <tr>
            <td class="td-problem-style">{{$problem->problem_1}}</td>
            <td class="td-problem-style">{{$problem->problem_2}}</td>
            <td class="td-problem-style">{{$problem->problem_3}}</td>
            <td class="td-problem-style">{{$problem->problem_4}}</td>
            <td class="td-problem-style">{{$problem->problem_5}}</td>
            <td class="td-problem-style">{{$problem->problem_6}}</td>
            <td class="td-problem-style">{{$problem->problem_7}}</td>
            <td class="td-problem-style">{{$problem->problem_8}}</td>
            <td class="td-problem-style">{{$problem->problem_9}}</td>
            <td class="td-problem-style">{{$problem->problem_10}}</td>
        </tr>
        @endforeach
        <tr>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
        </tr>

    </table>
    <div
        style="width: 30%;height:50px; margin-left:auto; margin-right: 80px;margin-bottom:60px; border-bottom: 1px solid #000;">
        <span style="margin-right: 75px;padding-top:50px;font-size:18px ">เวลา</span>
    </div>

    <table style="margin-top:15px;margin-left:70px; border:solid 1px black;margin-bottom:15px">
        <tr style="margin-bottom: 10px; text-align: center;">
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ1</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ2</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ3</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ4</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ5</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ6</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ7</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ8</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ9</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ10</td>
        </tr>
        @foreach ($problems->where('proplem_table_id',8) as $problem)
        <tr>
            <td class="td-problem-style">{{$problem->problem_1}}</td>
            <td class="td-problem-style">{{$problem->problem_2}}</td>
            <td class="td-problem-style">{{$problem->problem_3}}</td>
            <td class="td-problem-style">{{$problem->problem_4}}</td>
            <td class="td-problem-style">{{$problem->problem_5}}</td>
            <td class="td-problem-style">{{$problem->problem_6}}</td>
            <td class="td-problem-style">{{$problem->problem_7}}</td>
            <td class="td-problem-style">{{$problem->problem_8}}</td>
            <td class="td-problem-style">{{$problem->problem_9}}</td>
            <td class="td-problem-style">{{$problem->problem_10}}</td>
        </tr>
        @endforeach
        <tr>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
        </tr>

    </table>
    <div
        style="width: 30%;height:50px; margin-left:auto; margin-right: 80px;margin-bottom:60px; border-bottom: 1px solid #000;">
        <span style="margin-right: 75px;padding-top:50px;font-size:18px ">เวลา</span>
    </div>


    <div class="footer">สงวนลิขสิทธ์ ©สถาบันคณิตศาสตร์ไอแมคโซโรบัน ห้ามเผยแพร่</div>

    <div class="page-break"></div>
    {{-- เริ่มหน้าใหม่ --}}
    <header>
        <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
    </header>
    <div class="card">
        <h2>แบบฝึกหัด บวกและการลบโดยตรง</h2>
    </div>

    <table style="margin-top:25px;margin-left:70px; border:solid 1px black;margin-bottom:15px">
        <tr style="margin-bottom: 10px; text-align: center;">
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ1</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ2</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ3</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ4</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ5</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ6</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ7</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ8</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ9</td>
            <td style="border: 1px solid black;text-align:center;font-weight:100">ข้อ10</td>
        </tr>
        @foreach ($problems->where('proplem_table_id',9) as $problem)
        <tr>
            <td class="td-problem-style">{{$problem->problem_1}}</td>
            <td class="td-problem-style">{{$problem->problem_2}}</td>
            <td class="td-problem-style">{{$problem->problem_3}}</td>
            <td class="td-problem-style">{{$problem->problem_4}}</td>
            <td class="td-problem-style">{{$problem->problem_5}}</td>
            <td class="td-problem-style">{{$problem->problem_6}}</td>
            <td class="td-problem-style">{{$problem->problem_7}}</td>
            <td class="td-problem-style">{{$problem->problem_8}}</td>
            <td class="td-problem-style">{{$problem->problem_9}}</td>
            <td class="td-problem-style">{{$problem->problem_10}}</td>
        </tr>
        @endforeach
        <tr>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
            <td class="td-answer-style"></td>
        </tr>

    </table>
    <div style="margin-top: 20px;margin-left:50px">
        <span class="title">ฟังคำถามจากครูผู้สอนแล้วเขียนคำตอบลงในช่องว่าง</span>
    </div>
    <table style="width: 80%;margin-left:80px">
        <tr style="">
            <td class="solid-under-line">

                <span style="margin-bottom:-5px;margin-left:-10px">1.</span>
            </td>
            <td style="height: 50px;width:10px"></td>
            <td class="solid-under-line">

                <span style="margin-bottom:-5px;margin-left:-10px">6.</span>
            </td>
        </tr>
        <tr>
            <td class="solid-under-line">

                <span style="margin-bottom:-5px;margin-left:-10px">2.</span>
            </td>
            <td style="height: 50px;width:10px"></td>
            <td class="solid-under-line">

                <span style="margin-bottom:-5px;margin-left:-10px">7.</span>
            </td>
        </tr>
        <tr>
            <td class="solid-under-line">

                <span style="margin-bottom:-5px;margin-left:-10px">3.</span>
            </td>
            <td style="height: 50px;width:10px"></td>
            <td class="solid-under-line">

                <span style="margin-bottom:-5px;margin-left:-10px">8.</span>
            </td>
        </tr>
        <tr>
            <td class="solid-under-line">

                <span style="margin-bottom:-5px;margin-left:-10px">4.</span>
            </td>
            <td style="height: 50px;width:10px"></td>
            <td class="solid-under-line">

                <span style="margin-bottom:-5px;margin-left:-10px">9.</span>
            </td>
        </tr>
        <tr>
            <td class="solid-under-line">

                <span style="margin-bottom:-5px;margin-left:-10px">5.</span>
            </td>
            <td style="height: 50px;width:10px"></td>
            <td
                style="height: 50px;font-weight: 100 ;width:150px;border-bottom: 1px solid #000;text-align:left;padding-bottom:-15px;padding-left:-20px">

                <span style="margin-bottom:-5px;margin-left:-10px">10.</span>
            </td>
        </tr>
    </table>

    <div class="footer">สงวนลิขสิทธ์ ©สถาบันคณิตศาสตร์ไอแมคโซโรบัน ห้ามเผยแพร่</div>
    <div class="page-break"></div>


</body>

</html>