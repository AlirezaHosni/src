<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">گزارش بستانکار </h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>

                                <th>نام کاربر </th>
                                <th>مبلغ بستانکار </th>
                                <th>مبلغ واریزی</th>
                                <th>تاریخ بروز رسانی</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $total_amount = 0; ?>
                            @forelse($wallet as $key => $row)
                                <tr>
                                    <th>{{ $key+=1 }}</th>
                                    <th>{{ $row->user->username??'' }} </th>
                                    <th>{{ $row->deposit }} </th>
                                    <th>{{ $row->transfer??'' }} </th>
                                    <th>{{ Verta($row->updated_at)->format('%d %B %Y H:i') }}</th>

                                </tr>
                            @empty
                                <p>گزارش بستانکاری موجود نیست</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
</body>
</html>
