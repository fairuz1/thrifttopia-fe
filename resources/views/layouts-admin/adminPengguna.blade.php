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
                        <div class="row permintaan py-3 pb-4">
                            <table id="datatable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Nomor Whatsapp</th>
                                        {{-- <th>Barang Aktif</th>
                                        <th>Barang Terjual</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < count($users['data']); $i++)
                                        @if ($users['data'][$i]['name'] != '')
                                            <tr>
                                                <td>
                                                    <div>
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Avatar" loading="lazy"/>
                                                        {{ $users['data'][$i]['name'] }}
                                                    </div>
                                                </td>
                                                <td>{{ $users['data'][$i]['email'] }}</td>
                                                <td>{{ $users['data'][$i]['wa_number'] }}</td>
                                            </tr>
                                        @endif
                                    @endfor
                                </tbody>
                            </table>
                        </div>
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
