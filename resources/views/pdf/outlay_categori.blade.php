<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style>
        * {
            font-family: 'DejaVu Sans';
        }

        .page-break {
            page-break-after: always;
        }

        #customers {
            /* font-family: Arial, Helvetica, sans-serif; */
            /* border-collapse: collapse; */
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: right;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>كل فئات المدفوعات</h1>

    <table id="customers" class="page-break">
        <tr>
            <th>#</th>
            <th class="text-center">اسم فئة السعر</th>
            <th class="text-center">حالة التفعيل</th>
            <th class="text-center">التاريخ</th>
        </tr>

        @foreach ($data as $info)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="text-center">{{ $info->name }}</td>
                <td class="text-center {{ $info->active == 1 ? 'text-success' : 'text-danger' }}">
                    {{ $info->active == 1 ? 'مفعل' : 'معطل' }}</td>
                    <td class="text-center">{{optional($info->updated_at ? $info->updated_at : $info->created_at)->format('Y-m-d')}}</td>
            </tr>
        @endforeach

    </table>

</body>

</html>