@extends('admin.layout.layout')

@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">مقاله جدید</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings mr-1"></i> Settings
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div>
        <!-- end page title -->
        <form action="/administrator/blog/store" method="POST">
            @csrf

            @if (count($errors->all())>0)
            <ul>
                @foreach ($errors as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">


                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">عنوان</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="title" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">متن اصلی</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="elm1" name="text" rows="18" ></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">دسته بندی</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>۱۱</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button class="form-control btn btn-info" id="inputHorizontalDnger" placeholder="">ارسال</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            @if (count($errors->all()))
            <ul class="bg-danger list-unstyled text-light">
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        </form>




    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

@endsection

