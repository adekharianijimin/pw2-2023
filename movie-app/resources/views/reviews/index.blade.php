@extends('layouts.main')

@section('content')
<h1 class="mt-4">Reviews Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Reviews</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Reviews Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>review</th>
                    <th>tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>review</th>
                    <th>tanggal</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <th>Tune in for Love</th>
                    <th>Jung ji-woo</th>
                    <th>7.1</th>
                    <th>Tune in for Love adalah sebuah film romansa Korea Selatan tahun 2019 garapan Jung Ji-woo. Film tersebut menampilkan Kim Go-eun dan Jung Hae-in.</th>
                    <th>2019</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <th>Ditto</th>
                    <th>Seo Eun Young</th>
                    <th>9.8</th>
                    <th>Film Ditto menceritakan tentang kisah cinta remaja dan persahabatan dua orang mahasiswa. </th>
                    <th>2022</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <th>My Love, My Bride</th>
                    <th>Im Chan-Sang</th>
                    <th>8.5</th>
                    <th>Film ini menceritakan kehidupan pengantin baru Young- Min (Cho Jung Seok) dan Mi-Young (Shin Min A). Young-Min bekerja di instalasi pemerintahan sekaligus penyair dan Mi-Young guru seni lukis. </th>
                    <th>2014</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <th>Alive</th>
                    <th>II Cho</th>
                    <th>7.5</th>
                    <th>Alive adalah sebuah film mayat hidup seru Korea Selatan tahun 2020 garapan Cho Il-hyung, dan menampilkan Yoo Ah-in dan Park Shin-hye. Film tersebut berdasarkan pada film Amerika Serikat tahun 2019 Alone karya Matt Naylor.</th>
                    <th>2020</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <th>Decibel</th>
                    <th>Hwang In-Ho</th>
                    <th>9.5</th>
                    <th>Mantan perwira Angkatan Laut, Do-yeong mengidap gangguan stres pascatrauma usai selamat dari kecelakaan kapal selam yang menewaskan rekan-rekannya. Sekalipun kini dipandang sebagai pahlawan oleh masyarakat, ia terus menyimpan rasa bersalah serta tersiksa oleh sikap keluarga yang menjauh darinya.</th>
                    <th>2022</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection