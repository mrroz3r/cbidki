@extends('layouts.layouts-admin')
@section('content')

  <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="adminpro-order-form" class="adminpro-form" method="POST" action="{{url('merchandise/save')}}" enctype="multipart/form-data">
                                @csrf
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Marchandise<span class="table-project-n"></span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="No">No</th>
                                                    <th data-field="nama">Nama</th>
                                                    <th data-field="deskripsi">Deskripsi 2</th>
                                                    <th data-field="logo">Logo</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $merchandise = \App\Merchandise::all();  
                                                ?>
                                                @foreach ($merchandise as $n)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$n->nama}}</td>
                                                    <td>{{$n->deskripsi}}</td>
                                                    <td><img src="{{ url('images/'.$n->logo) }}" style="width: 70px; height: 70px"></td>

                                                    <td class="datatable-ct">
                                                        <a href="{{url('admin/merchandise/edit/'.$n->id)}}" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>

                                                        <a href="{{url('merchandise/delete/'.$n->id)}}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> 
                        </div>


                        <div class="col-lg-12">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Nama</p>
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="nama"></textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                                        </div>
                                     </div>
                                <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Deskripsi</p>
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="deskripsi"></textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                                    </div>
                        <div class="col-lg-8">
                            <div class="login-input-area">
                                <label>Logo</label>
                                <input name="logo" type="file" class="ts-forms" style="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                        <div class="col-lg-8">
                            <div class="login-button-pro">
                                <button type="submit" class="login-button login-button-lg"><i class="fa fa-save">SAVE</i></button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
@endsection