@props(['values', 'edit_route' => null, 'delete_route' => null])


<table class="table table-borderless table-striped">

    <thead>
        <th scope="col">Title</th>
        <th>Value</th>
    </thead>

    <tbody>
        {{-- {{dd($values->Branch->name)}} --}}
        @foreach ($values->getAttributes() as $key => $value)
            <tr>
                <td>{{ Str::ucfirst($key) }}</td>

                @if ($key == 'category_id' && isset($values->Category['name']))
                    <td> <a href="{{ route('category.show', [$values->Category['id']]) }}"
                            class="text-decoration-none">{{ $values->Category['name'] }}</a> </td>
                @elseif ($key == 'course_id' && isset($values->course['name']))
                    <td> <a href="{{ route('course.show', [$values->course['id']]) }}"
                            class="text-decoration-none">{{ $values->course['name'] }}</a> </td>
                @elseif($key == 'description')
                    <td class="text-wrap">{!! $value !!}</td>
                @elseif($key == 'image1x1')
                    <td class="text-wrap">
                        <img src="{{ asset('storage/' . $values->image1x1) }}" alt="..."
                                        class="d-block me-auto px-auto" height="280px" width="auto">
                    </td>
                @else
                    <td>{{ $value }}</td>
                @endif
            </tr>
        @endforeach

        @if (!empty($values->image[0]))
            <tr>
                <td>Image:</td>
                <td>
                    <div id="carouselExampleIndicators" class="carousel slide carousel-img bg-secondary px-5"
                        style="height: 300px;width:500px;">
                        <div class="carousel-indicators">
                            @if(is_array($values->image))
                            @foreach ($values->image as $index => $image)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                    aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                            @endif

                        </div>
                        <div class="carousel-inner ">
                            @if(is_array($values->image))

                            @foreach ($values->image as $index => $item)
                                <div class="carousel-item{{ $index === 0 ? ' active' : '' }}  ">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="..."
                                        class="d-block me-auto px-auto" height="280px" width="auto">
                                </div>
                            @endforeach
                            @endif
                            @if (!is_array($values->image))
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $values->image) }}" alt="..."
                                        class="d-block me-auto px-auto" height="280px" width="auto">
                                </div>

                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </td>
            </tr>
        @endif

    </tbody>


</table>
<div class="d-flex justify-content-end mt-3">
    <a href="{{ url()->previous() }}" class="btn px-3 mx-2 " style="background-color: #005174;color:#fff;">
        <i class="fe fe-arrow-left fe-16"></i>
    </a>

    @if (!is_null($edit_route))
        <a href="{{ route($edit_route, $values->id) }}" class="btn btn-secondary px-3 mx-2">
            <i class="fe fe-edit fe-16"></i>
        </a>
    @endif

    @if (!is_null($delete_route))
        <button type="button" class="btn btn-danger px-3 mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fe fe-trash-2 fe-16"></i>
        </button>
        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content m-6">
                    <div class="modal-body m-6">
                        <h5>Are you sure you want to delete?</h5>
                        <form action="{{ route($delete_route, $values->id) }}" method="post" class="d-inline">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger d-inline">
                        </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
