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
        <h2>การใช้สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ (สูตรรวม)</h2>
    </div>
    <table style="width: 90%;margin-left:80px;margin-top:20px">
        <tr style="">
            <th style="font-size: 34px;font-family:'sarabun';border-bottom: 1px solid #080808;padding-bottom:0px">สูตร
            </th>
            <th style="font-size: 34px;font-family:'sarabun' ;border-bottom: 1px solid #080808;padding-bottom:0px">
                การอ่านสูตร</th>
        </tr>
        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:210px">
                +9 = +4 - 5 +
                10
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:60px;font-family:'sarabun;line-height:30px;padding-top:20px">
                บวกเก้า
                เท่ากับ เพิ่มสี่ ลดห้า
                เพิ่มสิบ</td>
        </tr>
        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:200px">
                +8 = +3 - 5 +
                10
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:60px;font-family:'sarabun;line-height:30px;padding-top:20px">
                บวกแปด
                เท่ากับ เพิ่มสาม ลดห้า
                เพิ่มสิบ</td>
        </tr>
        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:210px">
                +7 = +2 - 5 +
                10
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:60px;font-family:'sarabun;line-height:30px;padding-top:20px">
                บวกเจ็ด
                เท่ากับ เพิ่มสอง ลดห้า
                เพิ่มสิบ</td>
        </tr>
        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:210px">
                +6 = +1 -5 + 10
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:60px;font-family:'sarabun;line-height:30px;padding-top:20px">
                บวกหก
                เท่ากับ เพิ่มหนึ่ง ลดห้า
                เพิ่มสิบ</td>
        </tr>
        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:210px">
                -9 = -10 + 5 - 4
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:60px;font-family:'sarabun;line-height:30px;padding-top:20px">
                ลบเก้า
                เท่ากับ ลดสิบ เพิ่มห้า ลดสี่</td>
        </tr>
        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:210px">
                -8 = -10 + 5 - 3
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:60px;font-family:'sarabun;line-height:30px;padding-top:20px">
                ลบแปด
                เท่ากับ ลดสิบ เพิ่มห้า ลดสาม</td>
        </tr>
        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:210px">
                -7 = -10 + 5 - 2
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:60px;font-family:'sarabun;line-height:30px;padding-top:20px">
                ลบเจ็ด
                เท่ากับ ลดสิบ เพิ่มห้า ลดสอง</td>
        </tr>
        <tr>
            <td style="font-size: 26px;font-weight:200;line-height:30px;font-weight:bold;padding-top:20px;width:210px">
                -6 = -10 + 5 - 1
            </td>
            <td
                style="font-size: 34px;font-weight:200;text-align:left;padding-left:60px;font-family:'sarabun;line-height:30px;padding-top:20px">
                ลบหก
                เท่ากับ ลดสิบ เพิ่มห้า ลดหนึ่ง</td>
        </tr>

    </table>


    <div style="text-align: left;margin-top:25px ">
        <h2 style="text-decoration: underline;font-weight:bold;font-family:'sarabun">
            วิธีการใช้สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ (สูตรรวม) </h2>
    </div>

    <div style="text-align: left;margin-top:10px ">
        <h2>สูตรรวม เป็นการรวม <span
                style="color:red;font-weight:bold;font-family:'sarabun;font-size:36px">บิ๊กเฟรนด์</span>
            และ
            <span style="color:red;font-weight:bold;font-size:36px">ลิตเติลเฟรนด์</span>
        </h2>
    </div>

    <div style="text-align: left;margin-top:10px ">
        <h2>
            นักเรียนต้อง <span style="color:red;font-weight:bold;font-size:40px">"จำสูตร"</span> ให้แม่น
        </h2>
    </div>

    <div class="footer">สงวนลิขสิทธ์ ©สถาบันคณิตศาสตร์ไอแมคโซโรบัน ห้ามเผยแพร่</div>

    <div class="page-break"></div>

    <header>
        <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
    </header>
    <div class="card">
        <h2>การบวกและลบเลขโดยใช้สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ (สูตรรวม)</h2>
    </div>

    <div style="text-align: left;margin-left:70px;margin-top:20px ">
        <span style="font-family:sarabun;font-size:32px;font-weight:200;text-decoration: underline">ตัวอย่างการบวก
            <strong>6 + 8</strong> <span style="font-style: italic">(ใช้สูตรรวม +8)</span> </span>
    </div>
    <table style="width:70%;margin-left:70px;">
        <tr>
            <td><img style="width:200px" src="assets/images/fingers/6plus8_step1.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/6plus8_step2.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/6plus8_step3.png" alt="hand"></td>
        </tr>
        <tr style="text-align:center">
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">เริ่มต้นนับ 6 มือขวา</td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">เพิ่ม 3 ลด 5 และเพิ่ม
                10
            </td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">อ่านค่านิ้วมือ เท่ากับ 14
            </td>
        </tr>
    </table>

    <div style="text-align: left;margin-left:70px;margin-top:20px ">
        <span style="font-family:sarabun;font-size:32px;font-weight:200;text-decoration: underline">ตัวอย่างการบวก
            <strong>7 + 7</strong><span style="font-style: italic"> (ใช้สูตรวม +7)</span></span>
    </div>
    <table style="width:80%;margin-left:70px;">
        <tr>
            <td><img style="width:200px" src="assets/images/fingers/7plus7_step1.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/7plus7_step2.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/7plus7_step3.png" alt="hand"></td>
        </tr>
        <tr style="text-align:center">
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">เริ่มต้นนับ 7 มือขวา</td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">เพิ่ม 2 ลด 5 และเพิ่ม
                10
            </td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">อ่านค่านิ้วมือ เท่ากับ 14
            </td>
        </tr>
    </table>

    <div style="text-align: left;margin-left:70px;margin-top:20px ">
        <span style="font-family:sarabun;font-size:32px;font-weight:200;text-decoration: underline">ตัวอย่างการบวก
            <strong>5 + 6</strong> <span style="font-style: italic">(ใช้สูตรรวม +6)</span> </span>
    </div>
    <table style="width:70%;margin-left:70px;">
        <tr>
            <td><img style="width:200px" src="assets/images/fingers/5plus6_step1.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/5plus6_step2.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/5plus6_step3.png" alt="hand"></td>
        </tr>
        <tr style="text-align:center">
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">เริ่มต้นนับ 5 มือขวา</td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">เพิ่ม 1 ลด 5 และเพิ่ม
                10
            </td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">อ่านค่านิ้วมือ เท่ากับ 11
            </td>
        </tr>
    </table>


    <div class="footer">สงวนลิขสิทธ์ ©สถาบันคณิตศาสตร์ไอแมคโซโรบัน ห้ามเผยแพร่</div>

    <div class="page-break"></div>

    <header>
        <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
    </header>
    <div class="card">
        <h2>การบวกและลบเลขโดยใช้สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ (สูตรรวม)</h2>
    </div>

    <div style="text-align: left;margin-left:70px;margin-top:20px ">
        <span style="font-family:sarabun;font-size:32px;font-weight:200;text-decoration: underline">ตัวอย่างการลบ
            <strong>14 - 8</strong> <span style="font-style: italic">(ใช้สูตรรวม -8)</span> </span>
    </div>
    <table style="width:70%;margin-left:70px;">
        <tr>
            <td><img style="width:200px" src="assets/images/fingers/14minus8_step1.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/14minus8_step2.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/14minus8_step3.png" alt="hand"></td>
        </tr>
        <tr style="text-align:center">
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">เริ่มต้นนับ 14</td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">ลดสิบ และเพิ่ม 5 ลด
                3
            </td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">อ่านค่านิ้วมือ เท่ากับ 6
            </td>
        </tr>
    </table>

    <div style="text-align: left;margin-left:70px;margin-top:20px ">
        <span style="font-family:sarabun;font-size:32px;font-weight:200;text-decoration: underline">ตัวอย่างการลบ
            <strong>13 - 7</strong><span style="font-style: italic"> (ใช้สูตรวม -7)</span></span>
    </div>
    <table style="width:80%;margin-left:70px;">
        <tr>
            <td><img style="width:200px" src="assets/images/fingers/13minus7_step1.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/13minus7_step2.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/13minus7_step3.png" alt="hand"></td>
        </tr>
        <tr style="text-align:center">
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">เริ่มต้นนับ 13</td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">ลดสิบ และเพิ่ม 5 ลด
                2
            </td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">อ่านค่านิ้วมือ เท่ากับ 6
            </td>
        </tr>
    </table>

    <div style="text-align: left;margin-left:70px;margin-top:20px ">
        <span style="font-family:sarabun;font-size:32px;font-weight:200;text-decoration: underline">ตัวอย่างการลบ
            <strong>11 - 6</strong> <span style="font-style: italic">(ใช้สูตรรวม -6)</span> </span>
    </div>
    <table style="width:70%;margin-left:70px;">
        <tr>
            <td><img style="width:200px" src="assets/images/fingers/11minus6_step1.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/11minus6_step2.png" alt="hand"></td>
            <td><img style="width:200px" src="assets/images/fingers/11minus6_step3.png" alt="hand"></td>
        </tr>
        <tr style="text-align:center">
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">เริ่มต้นนับ 11</td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">ลดสิบ และเพิ่ม 5 ลด
                1
            </td>
            <td style="font-family:sarabun;font-size:30px;font-weight:200;padding-top:-5px">อ่านค่านิ้วมือ เท่ากับ 5
            </td>
        </tr>
    </table>

    <div class="footer">สงวนลิขสิทธ์ ©สถาบันคณิตศาสตร์ไอแมคโซโรบัน ห้ามเผยแพร่</div>

    <div class="page-break"></div>


    {{-- เริ่มหน้าใหม่ --}}
    <header>
        <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
    </header>
    <div class="card">
        <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +9</h2>
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
        <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +9 </h2>
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
        <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +9</h2>
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +8</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',10) as $problem)
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
    @foreach ($problems->where('proplem_table_id',11) as $problem)
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
    @foreach ($problems->where('proplem_table_id',12) as $problem)
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
    @foreach ($problems->where('proplem_table_id',13) as $problem)
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
    @foreach ($problems->where('proplem_table_id',14) as $problem)
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
    @foreach ($problems->where('proplem_table_id',15) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +8 </h2>
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
    @foreach ($problems->where('proplem_table_id',16) as $problem)
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
    @foreach ($problems->where('proplem_table_id',17) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +8</h2>
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
    @foreach ($problems->where('proplem_table_id',18) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +7</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',19) as $problem)
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
    @foreach ($problems->where('proplem_table_id',20) as $problem)
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
    @foreach ($problems->where('proplem_table_id',21) as $problem)
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
    @foreach ($problems->where('proplem_table_id',22) as $problem)
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
    @foreach ($problems->where('proplem_table_id',23) as $problem)
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
    @foreach ($problems->where('proplem_table_id',24) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +7 </h2>
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
    @foreach ($problems->where('proplem_table_id',25) as $problem)
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
    @foreach ($problems->where('proplem_table_id',26) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +7</h2>
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
    @foreach ($problems->where('proplem_table_id',27) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +6</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',28) as $problem)
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
    @foreach ($problems->where('proplem_table_id',29) as $problem)
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
    @foreach ($problems->where('proplem_table_id',30) as $problem)
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
    @foreach ($problems->where('proplem_table_id',31) as $problem)
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
    @foreach ($problems->where('proplem_table_id',32) as $problem)
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
    @foreach ($problems->where('proplem_table_id',33) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +6 </h2>
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
    @foreach ($problems->where('proplem_table_id',34) as $problem)
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
    @foreach ($problems->where('proplem_table_id',35) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ +6</h2>
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
    @foreach ($problems->where('proplem_table_id',36) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -9</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',37) as $problem)
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
    @foreach ($problems->where('proplem_table_id',38) as $problem)
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
    @foreach ($problems->where('proplem_table_id',39) as $problem)
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
    @foreach ($problems->where('proplem_table_id',40) as $problem)
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
    @foreach ($problems->where('proplem_table_id',41) as $problem)
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
    @foreach ($problems->where('proplem_table_id',42) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -9 </h2>
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
    @foreach ($problems->where('proplem_table_id',43) as $problem)
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
    @foreach ($problems->where('proplem_table_id',44) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -9</h2>
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
    @foreach ($problems->where('proplem_table_id',45) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -8</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',46) as $problem)
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
    @foreach ($problems->where('proplem_table_id',47) as $problem)
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
    @foreach ($problems->where('proplem_table_id',48) as $problem)
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
    @foreach ($problems->where('proplem_table_id',49) as $problem)
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
    @foreach ($problems->where('proplem_table_id',50) as $problem)
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
    @foreach ($problems->where('proplem_table_id',51) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -8 </h2>
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
    @foreach ($problems->where('proplem_table_id',52) as $problem)
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
    @foreach ($problems->where('proplem_table_id',53) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -8</h2>
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
    @foreach ($problems->where('proplem_table_id',54) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -7</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',55) as $problem)
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
    @foreach ($problems->where('proplem_table_id',56) as $problem)
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
    @foreach ($problems->where('proplem_table_id',57) as $problem)
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
    @foreach ($problems->where('proplem_table_id',58) as $problem)
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
    @foreach ($problems->where('proplem_table_id',59) as $problem)
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
    @foreach ($problems->where('proplem_table_id',60) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -7 </h2>
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
    @foreach ($problems->where('proplem_table_id',61) as $problem)
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
    @foreach ($problems->where('proplem_table_id',62) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -7</h2>
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
    @foreach ($problems->where('proplem_table_id',63) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -6</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',64) as $problem)
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
    @foreach ($problems->where('proplem_table_id',65) as $problem)
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
    @foreach ($problems->where('proplem_table_id',66) as $problem)
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
    @foreach ($problems->where('proplem_table_id',67) as $problem)
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
    @foreach ($problems->where('proplem_table_id',68) as $problem)
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
    @foreach ($problems->where('proplem_table_id',69) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -6 </h2>
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
    @foreach ($problems->where('proplem_table_id',70) as $problem)
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
    @foreach ($problems->where('proplem_table_id',71) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ -6</h2>
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
    @foreach ($problems->where('proplem_table_id',72) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 1)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',73) as $problem)
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
    @foreach ($problems->where('proplem_table_id',74) as $problem)
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
    @foreach ($problems->where('proplem_table_id',75) as $problem)
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
    @foreach ($problems->where('proplem_table_id',76) as $problem)
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
    @foreach ($problems->where('proplem_table_id',77) as $problem)
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
    @foreach ($problems->where('proplem_table_id',78) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',79) as $problem)
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
    @foreach ($problems->where('proplem_table_id',80) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',81) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 2)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',82) as $problem)
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
    @foreach ($problems->where('proplem_table_id',83) as $problem)
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
    @foreach ($problems->where('proplem_table_id',84) as $problem)
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
    @foreach ($problems->where('proplem_table_id',85) as $problem)
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
    @foreach ($problems->where('proplem_table_id',86) as $problem)
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
    @foreach ($problems->where('proplem_table_id',87) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',88) as $problem)
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
    @foreach ($problems->where('proplem_table_id',89) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',90) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 3)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',91) as $problem)
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
    @foreach ($problems->where('proplem_table_id',92) as $problem)
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
    @foreach ($problems->where('proplem_table_id',93) as $problem)
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
    @foreach ($problems->where('proplem_table_id',94) as $problem)
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
    @foreach ($problems->where('proplem_table_id',95) as $problem)
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
    @foreach ($problems->where('proplem_table_id',96) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',97) as $problem)
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
    @foreach ($problems->where('proplem_table_id',98) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',99) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 4)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',100) as $problem)
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
    @foreach ($problems->where('proplem_table_id',101) as $problem)
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
    @foreach ($problems->where('proplem_table_id',102) as $problem)
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
    @foreach ($problems->where('proplem_table_id',103) as $problem)
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
    @foreach ($problems->where('proplem_table_id',104) as $problem)
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
    @foreach ($problems->where('proplem_table_id',105) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',106) as $problem)
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
    @foreach ($problems->where('proplem_table_id',107) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',108) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 5)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',109) as $problem)
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
    @foreach ($problems->where('proplem_table_id',110) as $problem)
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
    @foreach ($problems->where('proplem_table_id',111) as $problem)
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
    @foreach ($problems->where('proplem_table_id',112) as $problem)
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
    @foreach ($problems->where('proplem_table_id',113) as $problem)
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
    @foreach ($problems->where('proplem_table_id',114) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',115) as $problem)
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
    @foreach ($problems->where('proplem_table_id',116) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',117) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 6)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',118) as $problem)
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
    @foreach ($problems->where('proplem_table_id',119) as $problem)
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
    @foreach ($problems->where('proplem_table_id',120) as $problem)
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
    @foreach ($problems->where('proplem_table_id',121) as $problem)
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
    @foreach ($problems->where('proplem_table_id',122) as $problem)
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
    @foreach ($problems->where('proplem_table_id',123) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',124) as $problem)
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
    @foreach ($problems->where('proplem_table_id',125) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',126) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 7)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',127) as $problem)
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
    @foreach ($problems->where('proplem_table_id',128) as $problem)
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
    @foreach ($problems->where('proplem_table_id',129) as $problem)
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
    @foreach ($problems->where('proplem_table_id',130) as $problem)
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
    @foreach ($problems->where('proplem_table_id',131) as $problem)
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
    @foreach ($problems->where('proplem_table_id',132) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',133) as $problem)
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
    @foreach ($problems->where('proplem_table_id',134) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',135) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 8)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',136) as $problem)
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
    @foreach ($problems->where('proplem_table_id',137) as $problem)
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
    @foreach ($problems->where('proplem_table_id',138) as $problem)
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
    @foreach ($problems->where('proplem_table_id',139) as $problem)
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
    @foreach ($problems->where('proplem_table_id',140) as $problem)
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
    @foreach ($problems->where('proplem_table_id',141) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',142) as $problem)
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
    @foreach ($problems->where('proplem_table_id',143) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',144) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 9)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',145) as $problem)
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
    @foreach ($problems->where('proplem_table_id',146) as $problem)
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
    @foreach ($problems->where('proplem_table_id',147) as $problem)
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
    @foreach ($problems->where('proplem_table_id',148) as $problem)
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
    @foreach ($problems->where('proplem_table_id',149) as $problem)
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
    @foreach ($problems->where('proplem_table_id',150) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',151) as $problem)
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
    @foreach ($problems->where('proplem_table_id',152) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',153) as $problem)
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
{{-- เริ่มหน้าใหม่ --}}
<header>
    <p class="studentname">สำหรับน้อง{{$studentNickname}} {{$studentName}} สาขา{{$branch}}</p>
</header>
<div class="card">
    <h2>สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - (ชุดที่ 10)</h2>
</div>

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
    @foreach ($problems->where('proplem_table_id',154) as $problem)
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
    @foreach ($problems->where('proplem_table_id',155) as $problem)
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
    @foreach ($problems->where('proplem_table_id',156) as $problem)
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
    @foreach ($problems->where('proplem_table_id',157) as $problem)
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
    @foreach ($problems->where('proplem_table_id',158) as $problem)
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
    @foreach ($problems->where('proplem_table_id',159) as $problem)
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
    <h2>จับเวลา: ใช้นิ้วมือบวกและลบเลข สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ -  </h2>
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
    @foreach ($problems->where('proplem_table_id',160) as $problem)
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
    @foreach ($problems->where('proplem_table_id',161) as $problem)
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
    <h2>แบบฝึกหัด สูตรบิ๊กแอนด์ลิตเติลเฟรนด์ + และ - </h2>
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
    @foreach ($problems->where('proplem_table_id',162) as $problem)
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

</body>

</html>