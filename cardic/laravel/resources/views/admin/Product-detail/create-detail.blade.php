@extends('admin.adminmaster')

@section('title', 'product detail')

@section('content')
@php
    // Adjust these values to change your grid dimensions
    $cols = 20; // number of columns
    $rows = 10; // number of rows
@endphp

<style>
    .try {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .table-container {
        /* CSS variables for dynamic grid sizing */
        --cols: {{ $cols }};
        --rows: {{ $rows }};
        width: 100%;
        height: 600px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        position: relative;
    }

    table {
        width: 100%;
        height: 100%;
        border-collapse: collapse;
    }

    td {
        width: calc(100% / var(--cols));
        height: calc(100% / var(--rows));
        border: 2px solid black;
        box-sizing: border-box;
        text-align: center;
        font-size: 16px;
        transition: background-color 0.3s, color 0.3s, transform 0.3s;
        cursor: pointer;
    }

    td:hover {
        background-color: #007bff;
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 4px 6px rgba(0,0,0,0.2);
    }

    td.dull {
        background-color: #000;
        color: #999;
        cursor: not-allowed;
        transform: none;
        box-shadow: none;
    }

    td:focus {
        outline: none;
        background-color: #28a745;
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 4px 6px rgba(0,0,0,0.3);
    }
</style>

<div class="container-fluid p-0">
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row px-5">
        <h1 class="text-center">Product Detail System for Cardic</h1>
    </div>
</div>

<div class="container" style="margin-top:15px;">
    <div class="row justify-content-end">
        <div class="col-md-6">
            <a href="{{ route('records.index', $banners->id) }}" class="btn btn-success">
                <i class="fa fa-edit"></i> All Record of Table
            </a>
        </div>
    </div>
</div>

<form class="w-100 mt-4" id="positionForm" action="{{ route('save.record') }}" method="POST" enctype="multipart/form-data" style="display:none;">
    @csrf
    <div class="card">
        <div class="card-header"><h5 class="card-title mb-0">Select Position</h5></div>
        <div class="card-body">
            <input type="text" class="form-control shadow-none" name="position" id="positionInput" readonly required>
        </div>
    </div>
    <input type="hidden" name="pro_id" id="proIdInput" value="{{ $banners->id }}">
    <div class="card mt-2">
        <div class="card-header"><h5 class="card-title mb-0">Caption</h5></div>
        <div class="card-body">
            <input type="text" class="form-control shadow-none" name="caption" placeholder="Caption" required>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-header"><h5 class="card-title mb-0">Banner Size Recommended (150x150)</h5></div>
        <div class="card-body">
            <input type="file" class="form-control shadow-none" name="image">
        </div>
    </div>
    <div class="px-1 mt-2">
        <button type="submit" class="btn btn-success px-3">Submit</button>
    </div>
</form>

<section class="try">
    @if($banners && isset($banners->image))
        <div class="table-container" style="--cols:{{ $cols }}; --rows:{{ $rows }}; background-image:url('{{ asset('uploads/banners/'.$banners->image) }}')">
            <table>
                <tbody>
                    @for($r = 0; $r < $rows; $r++)
                        <tr>
                            @for($c = 0; $c < $cols; $c++)
                                @php
                                    $pos = $r * $cols + $c + 1;
                                    $isDull = in_array($pos, $positions);
                                @endphp
                                <td class="{{ $isDull ? 'dull' : '' }}" data-pos="{{ $pos }}">
                                    {{ $pos }}
                                </td>
                            @endfor
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    @endif
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const table = document.querySelector('table');
    const form = document.getElementById('positionForm');
    const positionInput = document.getElementById('positionInput');
    const preSelected = @json($positions);
    preSelected.forEach(pos => {
        const cell = Array.from(table.querySelectorAll('td'))
                          .find(td => td.dataset.pos == pos);
        if(cell) cell.classList.add('dull');
    });
    table.addEventListener('click', e => {
        const td = e.target;
        if(td.tagName === 'TD' && !td.classList.contains('dull')) {
            positionInput.value = td.dataset.pos;
            document.getElementById('proIdInput').value = '{{ $banners->id }}';
            form.style.display = 'block';
        }
    });
});
</script>

@endsection
