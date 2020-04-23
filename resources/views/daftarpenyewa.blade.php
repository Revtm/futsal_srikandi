@include('partials.headerdaftarpenyewa')

@extends('layouts.operator')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Daftar Penyewa</h4>
                  <form action="/daftarpenyewa" method="get">
                        {{csrf_field()}}
                        <div class="row">
                          <div class="col-md-9">
                            <input name="tanggal" id="datepicker" width="270" value="{{$tanggal}}"/>
                          </div>
                          <div class="col-md-3">
                            <button type="submit" class="btn btn-info" name="button">Filter</button>
                          </div>
                        </div>

                  </form>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Kode Transaksi</th>
                        <th>Operator</th>
                        <th>Kode Lapangan</th>
                        <th>Kode Jadwal</th>
                        <th>Diskon</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $trs)
                            <tr class="item{{$trs->kode_transaksi}}">
                                <th scope="row">{{$loop->iteration}}</th>
                                <td class="capitalize">{{$trs->user->nama}}</td>
                                <td>{{$trs->user->telepon}}</td>
                                <td>{{$trs->kode_transaksi}}</td>
                                <td class="capitalize">{{$trs->operator->nama}}</td>
                                <td>{{$trs->kode_lapangan}}</td>
                                <td>{{$trs->kode_jadwal}}</td>
                                <td>{{$trs->diskon}}</td>
                                <td>{{$trs->tanggal}}</td>
                                <td class="horizontal">
                                    <form action="daftarpenyewa/{{$trs->kode_transaksi}}" method="post">
                                        @method('delete')
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                        <!-- <a href="daftarpenyewa/{{$trs->kode_transaksi}}/edit" class="btn btn-primary">Edit</a> -->
                                    </form>
                                    <button data-urutan="{{$loop->iteration}}" data-id="{{$trs->kode_transaksi}}" data-operator_nama="{{$trs->operator->nama}}" data-lapangan="{{$trs->kode_lapangan}}" data-user="{{$trs->kode_user}}" data-user_nama="{{$trs->user->nama}}" data-user_kontak="{{$trs->user->telepon}}" data-jadwal="{{$trs->kode_jadwal}}" data-diskon="{{$trs->diskon}}" data-tanggal="{{$trs->tanggal}}" class="btn btn-primary edit-modal">Ubah</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- Modal form to edit a form -->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <input type="hidden" class="form-control" id="urutan_edit">
                        <input type="hidden" class="form-control" id="idtransaksi_edit">
                        <input type="hidden" class="form-control" id="namaoperator_edit">
                        <input type="hidden" class="form-control" id="iduser_edit">
                        <input type="hidden" class="form-control" id="lapangan_edit">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nama">Nama:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_edit" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="kontak">Kontak:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kontak_edit" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="jadwal">Jadwal:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jadwal_edit" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="diskon">Diskon:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="diskon_edit" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tanggal">Tanggal:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal_edit" autofocus>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Ubah
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Batal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.onload = function() {
            // Ajax Setup
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            // Edit a post
            $(document).on('click', '.edit-modal', function() {
                $('.modal-title').text('Ubah');
                $('#urutan_edit').val($(this).data('urutan'));
                $('#idtransaksi_edit').val($(this).data('id'));
                $('#iduser_edit').val($(this).data('user'));
                $('#namaoperator_edit').val($(this).data('operator_nama'));
                $('#nama_edit').val($(this).data('user_nama'));
                $('#kontak_edit').val($(this).data('user_kontak'));
                $('#lapangan_edit').val($(this).data('lapangan'));
                $('#jadwal_edit').val($(this).data('jadwal'));
                $('#diskon_edit').val($(this).data('diskon'));
                $('#tanggal_edit').val($(this).data('tanggal'));
                urutan = $('#urutan_edit').val();
                id = $('#idtransaksi_edit').val();
                userid = $("#iduser_edit").val();
                operatornama = $("#namaoperator_edit").val();
                usernama = $('#nama_edit').val();
                userkontak = $('#kontak_edit').val();
                lapangan = $('#lapangan_edit').val();
                jadwal = $('#jadwal_edit').val();
                diskon = $('#diskon_edit').val();
                tanggal = $('#tanggal_edit').val();
                $('#editModal').modal('show');
            });
            $('.modal-footer').on('click', '.edit', function() {
                $.ajax({
                    type: 'PUT',
                    url: 'daftarpenyewa/' + id,
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'urutan': urutan,
                        'kode_transaksi': id,
                        'kode_user': userid,
                        'nama_operator': operatornama,
                        'nama': usernama = $('#nama_edit').val(),
                        'kontak': userkontak = $('#kontak_edit').val(),
                        'lapangan': lapangan,
                        'jadwal': jadwal = $('#jadwal_edit').val(),
                        'diskon': diskon = $('#diskon_edit').val(),
                        'tanggal': tanggal = $('#tanggal_edit').val()
                    },
                    success: function(data) {
                            // alert(id + ", " + urutan + ", " + userid + ", " + operatornama + ", " + usernama + ", " + userkontak + ", " + lapangan + ", " + jadwal + ", " + diskon + ", " + tanggal);
                            $('.item' + id).replaceWith("<tr class='item" + id + "'><th scope='row'>" + urutan + "</th><td class='capitalize'>" + usernama + "</td><td>" + userkontak + "</td><td>" + id + "</td><td class='capitalize'>" + operatornama + "</td><td>" + lapangan + "</td><td>" + jadwal + "</td><td>" + diskon + "</td><td>" + tanggal + "</td><td class='horizontal'><form action='daftarpenyewa/" + id + "' method='post'><button type='submit' class='btn btn-danger'>Hapus</button></form><button data-urutan='" + urutan + "' data-id='" + id + "' data-operator_nama='" + operatornama + "' data-lapangan='" + lapangan + "' data-user='" + userid + "' data-user_nama='" + usernama + "' data-user_kontak='" + userkontak + "' data-jadwal='" + jadwal + "' data-diskon='" + diskon + "' data-tanggal='" + tanggal + "' class='btn btn-primary edit-modal'>Ubah</button></td></tr>");
                    }
                });
            });
        }
    </script>

@endsection
