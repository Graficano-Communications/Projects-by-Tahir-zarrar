@extends('admin.layout.master')
@section('title', 'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Add New Service</h2>
                        </div>
                        <form class="w-100" action="{{ route('add-service-data') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Service Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name" placeholder="Name"
                                        required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Slug</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="slug" placeholder="Slug"
                                        required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Service 1st Heading</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="first_heading"
                                        placeholder="First Heading" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Service Detail</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" name="detailing" rows="8" required></textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Service Image (Size Recomended 538 x 535)</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="service_image"
                                        placeholder="Image" required>
                                </div>
                            </div>
                            <div id="characteristicsContainer">
                                <!-- First card (cannot be removed) -->
                                <div class="card mt-3">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title mb-0">Characteristics Of Service</h5>
                                        <button type="button" class="btn btn-primary add-more">Add More</button>
                                    </div>
                                    <div class="card-body">
                                        <label class="px-1 mt-2 mb-0">Heading</label>
                                        <input type="text" class="form-control shadow-none" name="second_heading[]"
                                            placeholder="Heading" required>
                                        <label class="px-1 mt-2 mb-0">Write Detail Here</label>
                                        <textarea class="form-control shadow-none" name="detail[]" required></textarea>
                                        <label class="px-1 mt-2 mb-0">Upload Image</label>
                                        <input type="file" class="form-control shadow-none" name="image[]" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
                                <div class="card-body">
                                    <label for="editor1" class="form-label">Add Service Description Here ...</label>
                                    <textarea class="form-control" name="editor1" rows="8" required placeholder="Enter description"></textarea>
                                </div>
                            </div>
                            <div id="faqContainer">
                                <!-- First FAQ card (cannot be removed) -->
                                <div class="card mt-3">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title mb-0">FAQ</h5>
                                        <button type="button" class="btn btn-primary add-faq">Add More</button>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control shadow-none" name="question[]"
                                            placeholder="Write Question" required>
                                        <label class="px-1 mt-1">Write Answer Here</label>
                                        <textarea class="form-control shadow-none" name="answer[]" required></textarea>
                                    </div>
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
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById("characteristicsContainer");

            document.addEventListener("click", function(e) {
                if (e.target.classList.contains("add-more")) {
                    const newCard = `
                        <div class="card mt-3">
                            <div class="card-body">
                                <label class="px-1 mt-2 mb-0">Heading</label>
                                <input type="text" class="form-control shadow-none" name="second_heading[]" placeholder="Heading" required>
                                <label class="px-1 mt-2 mb-0">Write Detail Here</label>
                                <textarea class="form-control shadow-none" name="detail[]" required></textarea>
                                <label class="px-1 mt-2 mb-0">Upload Image</label>
                                <input type="file" class="form-control shadow-none" name="image[]" required>
                                <button type="button" class="btn btn-danger mt-2 remove-card">Remove</button>
                            </div>
                        </div>
                    `;
                    container.insertAdjacentHTML("beforeend", newCard);
                }

                if (e.target.classList.contains("remove-card")) {
                    e.target.closest(".card").remove();
                }
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            const faqContainer = document.getElementById("faqContainer");

            document.addEventListener("click", function(e) {
                if (e.target.classList.contains("add-faq")) {
                    const newFaqCard = `
                    <div class="card mt-3">
                        <div class="card-body">
                            <input type="text" class="form-control shadow-none" name="question[]" placeholder="Write Question" required>
                            <label class="px-1 mt-1">Write Answer Here</label>
                            <textarea class="form-control shadow-none" name="answer[]" required></textarea>
                            <button type="button" class="btn btn-danger mt-2 remove-faq">Remove</button>
                        </div>
                    </div>
                `;
                    faqContainer.insertAdjacentHTML("beforeend", newFaqCard);
                }

                if (e.target.classList.contains("remove-faq")) {
                    e.target.closest(".card").remove();
                }
            });
        });
    </script>
@endsection
