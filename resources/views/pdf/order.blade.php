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

    <h1>كل الطلبيات</h1>

    <table id="customers" class="page-break">
        <tr>
            <th class="text-center">مسلسل</th>
            <th class="text-center">اسم الفرع</th>
            <th class="text-center">عدد المنتجات </th>
            <th class="text-center">المجموع بالدولار</th>
            <th class="text-center">المجموع بالليرة</th>
            <th class="text-center">التاريخ</th>
            <th class="text-center">الاعتماد</th>
        </tr>

        @foreach ($data as $info)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="text-center">{{ $info->user->name }}</td>
                <td class="text-center">{{ App\Models\OrderItem::where('order_id', $info->id)->count() }}</td>
                <td class="text-center">{{ $info->total_Doler }}</td>
                <td class="text-center">{{ $info->total_Lera }}</td>
                <td class="text-center">{{ $info->updated_at ? $info->updated_at : $info->created_at }}</td>
                <td class="d-flex justify-content-center ">

                  <a href="{{ route('orders.show', $info->id) }}"
                    class="btn btn-sm btn-label-warning mx-2">عرض المنتجات</a>
                </td>
            </tr>
        @endforeach

    </table>

</body>

</html>