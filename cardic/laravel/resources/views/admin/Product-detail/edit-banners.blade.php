@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')


<style>
    /* make each icon box sit side-by-side */
    .icon-list {
        /* if you want wrapping, no extra rules needed */
    }

    .icon-item {
        display: inline-block;
        margin: 15px 15px 15px 15px;
        text-align: center;
        vertical-align: top;
    }

    .icon-item img {
        display: block;
        width: 50px;
        height: 50px;
    }

    .icon-item small {
        display: block;
        margin-top: 5px;
        font-size: 0.85em;
        color: #555;
    }
</style>
<div class="container-fluid p-0">
    <div class="row mt-5">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <div class="heading1 margin_0">
                        <h2>Update Your Banner</h2>
                    </div>
                    <form action="{{ url('edit-banner-data', $banners->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Caption</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" value="{{$banners->caption}}" name="caption" placeholder="Caption" required>
                            </div>
                        </div>
                        <div class="card my-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Category</h5>
                            </div>
                            <div class="card-body">
                                <select class="form-control shadow-none" name="category" required>
                                    <option value="">Select Category</option>
                                    <option value="Cardiovascular" {{ $banners->category == 'Cardiovascular' ? 'selected' : '' }}>Cardiovascular</option>
                                    <option value="Plastic Surgery" {{ $banners->category == 'Plastic Surgery' ? 'selected' : '' }}>Plastic Surgery</option>
                                    <option value="Orthopedic" {{ $banners->category == 'Orthopedic' ? 'selected' : '' }}>Orthopedic</option>
                                    <option value="Gynecology" {{ $banners->category == 'Gynecology' ? 'selected' : '' }}>Gynecology</option>
                                    <option value="Micro Surgical" {{ $banners->category == 'Micro Surgical' ? 'selected' : '' }}>Micro Surgical</option>
                                    <option value="VATS" {{ $banners->category == 'VATS' ? 'selected' : '' }}>VATS</option>
                                </select>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Description</h5>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control  shadow-none" rows="2" value="" name="description" placeholder="Description">{{$banners->description}}</textarea>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Banner Size Recomended (1920*1080)</h5>
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('uploads/banners/'.$banners->image) }}" width="800px" height="400px" alt="Image">
                                <input type="file" class="form-control shadow-none mt-2" name="image" placeholder="Image">

                            </div>
                        </div>


                        @php
                        // Decode the JSON array of {file,label} objects
                        $iconList = $banners->icons
                        ? json_decode($banners->icons, true)
                        : [];
                        @endphp

                        @if(count($iconList))
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Existing Icons</h5>
                            </div>
                            <div class="card-body">
                                <div class="icon-list">
                                    @foreach($iconList as $entry)
                                    <div class="icon-item">
                                        <img
                                            src="{{ asset('uploads/banners/'.$entry['file']) }}"
                                            alt="{{ $entry['label'] }}">
                                        {{-- Show the label --}}
                                        <div class="mt-1">
                                            <small>{{ $entry['label'] }}</small>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                name="remove_icons[]"
                                                value="{{ $entry['file'] }}"
                                                id="rm_{{ $entry['file'] }}">
                                            <label
                                                class="form-check-label"
                                                for="rm_{{ $entry['file'] }}">
                                                Remove
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif



                        {{-- Upload New Icons --}}
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Upload New Icons (optional)</h5>
                            </div>
                            <div class="card-body">
                                <div id="new-icons-container">
                                    <div class="new-icon-entry" style="margin-top:10px;">
                                        <input
                                            type="file"
                                            name="new_icons[0][file]"
                                            accept="image/*"
                                            required>
                                        <input
                                            type="text"
                                            name="new_icons[0][label]"
                                            placeholder="Icon label"
                                            class="form-control"
                                            style="display:inline-block; width:200px;"
                                            required>
                                        <button type="button" class="remove-entry" style="margin-left:5px;">×</button>
                                    </div>
                                </div>
                                <button
                                    type="button"
                                    id="add-new-icon"
                                    class="btn btn-sm btn-outline-primary mt-2">
                                    + Add another icon
                                </button>
                            </div>
                        </div>

                        <div class="px-3 mt-3">
                            <button type="submit" class="btn btn-success px-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    (function() {
        let idx = 1;
        document.getElementById('add-new-icon')
            .addEventListener('click', () => {
                const tpl = document.createElement('div');
                tpl.className = 'new-icon-entry';
                tpl.style.marginTop = '10px';
                tpl.innerHTML = `
          <input 
            type="file" 
            name="new_icons[${idx}][file]" 
            accept="image/*" 
            required
          >
          <input 
            type="text" 
            name="new_icons[${idx}][label]" 
            placeholder="Icon label" 
            class="form-control" 
            style="display:inline-block; width:200px;" 
            required
          >
          <button type="button" class="remove-entry" style="margin-left:5px;">×</button>
        `;
                document.getElementById('new-icons-container')
                    .appendChild(tpl);
                idx++;
            });

        document.getElementById('new-icons-container')
            .addEventListener('click', e => {
                if (e.target.matches('.remove-entry')) {
                    e.target.closest('.new-icon-entry').remove();
                }
            });
    })();
</script>

@endsection