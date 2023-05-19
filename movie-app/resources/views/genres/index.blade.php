@extends('layouts.main')

@section('content')
<h1 class="mt-4">Genres Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Genres</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Genres Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Genre</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Genre</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Drama</td>
                    <td>Genre ini menceritakan kisah dari sebuah tokoh yang dihadapkan pada sebuah masalah, dimana dia harus menyelesaikan masalah tersebut, dalam cerita, juga ditunjukkan hal yang dapat menciptakan rasa relevan bagi para penonton, karena genre drama pada umumnya dibuat berdasarkan kisah atau stereotip yang ada.</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Romantis</td>
                    <td>Sesuai namanya, genre romance menceritakan kisah cinta yang tercipta di antara para tokoh. Bagaimana cintanya dapat terbangun, dan bagaimana para tokoh menyelesaikan masalah yang ada, genre romance dapat membuat para penonton ikut bahagia atau sedih, tergantung pada akhir film yang dibuat.</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Komedi</td>
                    <td>Genre komedi menciptakan sebuah cerita yang lucu dan dapat membuat penonton tertawa. Dalam genre film ini, penonton dapat tertawa baik dari adegan tokoh, percakapan, atau alur ceritanya. </td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Horor</td>
                    <td>Jika anda menginginkan film yang dapat menciptakan rasa takut, maka genre horor adalah pilihan yang tepat. Genre horor sering diasosiakan dengan kisah yang memiliki atau menceritakan tokoh dan pertemuannya dengan hantu, meskipun tidak selalu, namun hantu seringkali dapat menciptakan rasa takut bagi penonton.</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Aksi</td>
                    <td>Genre aksi bercerita mengenai konfrontasi fisik antara tokoh, yang melibatkan aksi dalam filmnya. Film aksi merupakan salah satu genre yang populer dalam industri film karena menciptakan rasa tegang bagi para penontonnya.</td>
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