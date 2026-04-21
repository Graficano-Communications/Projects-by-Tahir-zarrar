@extends('admin.adminmaster')

@section('title', 'product detail')

@section('content')


<div class="container-fluid p-0">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row px-5">
        <h1 class="text-center">Product Detail System for Cardic</h1>
    </div>

    <div class="row mt-5">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <div class="heading1 margin_0">
                        <h2>Add Image for table</h2>
                    </div>

                    <!-- Show the form if no banner record is found -->
                    <form class="w-100" action="{{ url('add-banner-data') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Caption</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="caption" placeholder="Caption" required>
                            </div>
                        </div>

                        <div class="card my-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Category</h5>
                            </div>
                            <div class="card-body">
                                <select class="form-control shadow-none" name="category" required>
                                    <option value="">Select Category</option>
                                    <option value="Cardiovascular">Cardiovascular</option>
                                    <option value="Plastic Surgery">Plastic Surgery</option>
                                    <option value="Orthopedic">Orthopedic</option>
                                    <option value="Gynecology">Gynecology</option>
                                    <option value="Micro Surgical">Micro Surgical</option>
                                    <option value="VATS">VATS</option>
                                </select>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Description</h5>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control  shadow-none" rows="2" value="" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="card " style="margin-top: 10px;">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Banner Size Recommended (1720*800)</h5>
                            </div>
                            <div class="card-body">
                                <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required>
                            </div>
                        </div>
                        <div class="card" style="margin-top: 20px;">
                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    Icons (100×100) & Labels
                                </h5>
                            </div>
                            <div class="card-body">
                                <div id="icons-container" style="margin-top: 10px;">
                                    <div class="icon-entry">
                                        <input type="file" name="icons[0][file]" accept="image/*" required>
                                        <input type="text" name="icons[0][label]" placeholder="Icon label" required>
                                        <button type="button" class="remove-entry">×</button>
                                    </div>
                                </div>
                                <button type="button" id="add-icon" class="btn btn-sm btn-outline-success" style="margin-top: 10px;">
                                    + Add another icon
                                </button>
                            </div>
                        </div>
                        <div class="px-1 " style="margin-top: 10px;">
                            <button type="submit" class="btn btn-success px-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
  (function(){
    let idx = 1;
    document.getElementById('add-icon').addEventListener('click', () => {
      const tpl = document.createElement('div');
      tpl.className = 'icon-entry';
      tpl.style.marginTop = '10px';  // <-- add margin-top here

      tpl.innerHTML = `
        <input type="file" name="icons[${idx}][file]" accept="image/*" required>
        <input type="text" name="icons[${idx}][label]" placeholder="Icon label" required>
        <button type="button" class="remove-entry">×</button>
      `;
      document.getElementById('icons-container').appendChild(tpl);
      idx++;
    });

    document.getElementById('icons-container')
      .addEventListener('click', e => {
        if (e.target.matches('.remove-entry')) {
          e.target.closest('.icon-entry').remove();
        }
      });
  })();
</script>



@endsection