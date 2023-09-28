@extends('backend.layout.app')
@section('main-content')
    <form action="{{ route('category.index') }}" method="POST" class="category-form">
        @csrf
        <label>Category:</label>
        <div class="category-inputbox">
            <input type="text" name="cat_name" placeholder="Beauty" class="category-input"><br>
            <button type="submit">submit</button>
        </div>
    </form> <br>

    <style>
        .category-form {
            width: 80%;
            margin-left: 5%;
        }

        .category-inputbox {
            width: 100%;
            display: flex;
            height: 40px;
            padding: 5px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #D2042D;
            justify-content: space-between;
            background-color: #ffffff;
            margin-top: 5%;
            margin-left: 5%;
        }

        .category-input {
            width: 100%;
            box-sizing: border-box;
            outline: none;
            border: none;
        }

        .category-table {
            width: 80%;
            margin-left: 5%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            border: 1px solid #d1d5db;
            margin-top: 1%;
            margin-left: 4%;
            background-color: white;
        }

        .category-table thead tr {
            padding: 10px;
            text-align: left;

        }

        .category-table th {
            background-color: #f2f2f2;
            color: #333;
            padding: 10px;
            border: 1px solid #d1d5db;
        }

        .category-table tbody tr td {
            border-top: 1px solid #d1d5db;
            padding: 10px;
            box-sizing: border-box;
            margin-left: 4%;
        }
    </style>
    <table class="category-table">
        <thead>
            <tr>

                <th>Name</th>
                {{-- <th>Total Products</th> --}}
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->cat_name }}</td>
                    {{-- <td>{{ $category->total_products }}</td> --}}
                    <td>
                        <div class="delete_edit">
                            <div>
                                <a href="#">
                                    <i class="fa-light fa-pen-to-square"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#"><i class="fa-sharp fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>


    </form>
@endsection
