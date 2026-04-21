@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
<style>
    .try {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
.table-container {
    width: 500px;
    height: 500px;
    background-size: cover; /* Keep the background image style */
    display: flex;
    justify-content: center;
    align-items: center;
}

table {
    width: 100%;
    height: 100%;
    border-collapse: collapse;
}

td {
    width: 10%; /* Each cell takes up 10% of the row's width */
    height: 10%; /* Each cell takes up 10% of the column's height */
    border: 2px solid black; /* Solid black border */
    box-sizing: border-box;
    text-align: center; /* Center the numbers */
    font-size: 24px; /* Large font size for visibility */
    transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover and color changes */
    cursor: pointer; /* Makes the cell clickable */
}

/* Hover Effect: Button-like appearance */
td:hover {
    background-color: #007bff; /* Highlighted blue background on hover */
    color: #fff; /* White text on hover */
    transform: scale(1.1); /* Slightly enlarge the cell on hover */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Add shadow for button effect */
}

/* Dull Effect: For selected cells */
td.dull {
    background-color: #000000; /* Semi-transparent gray for dull effect */
    color: #999; /* Light gray text */
    cursor: not-allowed; /* Change cursor to indicate it's not selectable */
    transform: none; /* No scaling for dull cells */
    box-shadow: none; /* Remove hover shadow */
}

/* Optional: Focused Cell (keyboard navigation support) */
td:focus {
    outline: none;
    background-color: #28a745; /* Green background when focused */
    color: #fff; /* White text */
    transform: scale(1.1); /* Slightly enlarge the cell */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Add shadow for focus effect */
}

</style>
    <div class="container-fluid p-0">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row px-5">
            <h1 class="text-center">Product Detail System for Graficano</h1>
        </div>
        @if(is_null($banners))
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
                             <div class="card mt-3">
                                 <div class="card-header">
                                     <h5 class="card-title mb-0">Banner Size Recommended (1920*1080)</h5>
                                 </div>
                                 <div class="card-body">
                                     <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required>
                                 </div>
                             </div>
                             <div class="px-1 mt-3">
                                 <button type="submit" class="btn btn-success px-3">Submit</button>
                             </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    @if($banners)
    <div class="container mt-5">
        <div class="row justify-content-end">  
            <a href="{{ route('banners') }}" class="btn btn-success">
                <i class="fa fa-edit"></i> Edit Product Image
            </a>
        </div>
    </div>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-Start">  
            <a href="{{ route('records.index') }}" class="btn btn-success">
                <i class="fa fa-edit"></i> All Record of Table
            </a>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-end">  
            <a href="{{ route('result') }}" class="btn btn-success">
                <i class="fa fa-edit"></i> Result of Image
            </a>
        </div>
    </div>
     <form class="w-100 mt-4" id="positionForm" action="{{ route('save.record') }}" method="POST" enctype="multipart/form-data" style="display: none;">
        @csrf
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Select Position</h5>
            </div>
            <div class="card-body">
                <input type="text" class="form-control shadow-none" name="position" id="positionInput" readonly required>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Caption</h5>
            </div>
            <div class="card-body">
                <input type="text" class="form-control shadow-none" name="caption" placeholder="Caption" required>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Banner Size Recommended (1920x1080)</h5>
            </div>
            <div class="card-body">
                <input type="file" class="form-control shadow-none" name="image">
            </div>
        </div>
        <div class="px-1 mt-3">
            <button type="submit" class="btn btn-success px-3">Submit</button>
        </div>
    </form>
    <section class="try">
        <div class="table-container" style="background-image: url('{{ asset('uploads/banners/' . $banners->image) }}');">
            <table>
                <tbody>
                    <!-- 10x10 Grid -->
                    <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr>
                    <tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td></tr>
                    <tr><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td></tr>
                    <tr><td>31</td><td>32</td><td>33</td><td>34</td><td>35</td><td>36</td><td>37</td><td>38</td><td>39</td><td>40</td></tr>
                    <tr><td>41</td><td>42</td><td>43</td><td>44</td><td>45</td><td>46</td><td>47</td><td>48</td><td>49</td><td>50</td></tr>
                    <tr><td>51</td><td>52</td><td>53</td><td>54</td><td>55</td><td>56</td><td>57</td><td>58</td><td>59</td><td>60</td></tr>
                    <tr><td>61</td><td>62</td><td>63</td><td>64</td><td>65</td><td>66</td><td>67</td><td>68</td><td>69</td><td>70</td></tr>
                    <tr><td>71</td><td>72</td><td>73</td><td>74</td><td>75</td><td>76</td><td>77</td><td>78</td><td>79</td><td>80</td></tr>
                    <tr><td>81</td><td>82</td><td>83</td><td>84</td><td>85</td><td>86</td><td>87</td><td>88</td><td>89</td><td>90</td></tr>
                    <tr><td>91</td><td>92</td><td>93</td><td>94</td><td>95</td><td>96</td><td>97</td><td>98</td><td>99</td><td>100</td></tr>
                </tbody>
            </table>
        </div>
        <!-- Form -->
        
    </section>
   
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const table = document.querySelector("table");
            const form = document.getElementById("positionForm");
            const positionInput = document.getElementById("positionInput");
    
            // Pass positions from the backend
            const preSelectedPositions = @json($positions); // Positions fetched from DB
    
            // Mark pre-selected positions as dull
            preSelectedPositions.forEach(pos => {
                const cell = Array.from(table.getElementsByTagName('td')).find(td => td.textContent == pos);
                if (cell) cell.classList.add("dull");
            });
    
            // Add click event to cells
            table.addEventListener("click", function (event) {
                const cell = event.target;
    
                if (cell.tagName === "TD" && !cell.classList.contains("dull")) {
                    const position = cell.textContent;
                    positionInput.value = position;
                    form.style.display = "block";
                }
            });
        });
    </script>
    
@endsection


