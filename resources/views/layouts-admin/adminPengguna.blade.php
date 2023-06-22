@extends('layouts-admin.app')

@push('styles')
{{-- dashboard css --}}

@endpush

@section('content')

    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="row mx-3 pt-4 px-8">
            <!-- <div class="col"> -->
                <div class="row ringkasan">
                    <div class="judul">Pengguna</div>

                    <!-- <div class="row row-cols-1 row-cols-md-3 py-2 pb-4"> -->
                        <!-- <div class="col"> -->
                            <!-- permintaan Postingan -->
                        <div class="row permintaan py-3 pb-4" style="font-size: 10pt;">
                        <table id="datatable" class="table table-striped">
                            <thead>
                                <tr>
                                <th>Username</th>
                                <!-- <th>Status Akun</th> -->
                                <th>Email</th>
                                <th>Nomor Whatsapp</th>
                                <th>Barang Aktif</th>
                                <th>Barang Terjual</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>
                                    <div>
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Avatar" loading="lazy"/>
                                        vellya123
                                    </div>
                                </td>
                                <td>vellya23@mail.com</td>
                                <td>087819944000</td>
                                <td>1</td>
                                <td>0</td>
                                        
                            </tbody>
                        </table>
                </div>
            </div>
                            
        

    </main>
    <!--Main layout-->
        <!-- bootstrap5 dataTables js cdn -->

        <script>
          $(document).ready(function () {
            $('#datatable').DataTable();
          });
        </script>

@endsection

@push('scripts')
{{-- dashboard js --}}

@endpush
