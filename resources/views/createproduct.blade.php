@extends('layouts/mainlayout')
@section('content')
    <div class="text-center pt-20 py-12 px-6 mt-12">
        <h1 class="font-display font-bold text-5xl mb-6">Create Product</h1>
    </div>
    <div class="container mx-auto px-6 mb-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-4xl mx-auto">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
                class="relative bg-white rounded-lg">
                @csrf
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Name</label>
                    <input type="text" name="name"
                        class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700">
                    @if ($errors->has('name'))
                        <p class="error">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Description</label>
                    <input type="text" name="description"
                        class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700">
                    @if ($errors->has('description'))
                        <p class="error">{{ $errors->first('description') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Image</label>
                    <input type="file" name="product_image" class="mt-2 w-full form-control">
                    @if ($errors->has('product_image'))
                        <p class="error">{{ $errors->first('product_image') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Supplier</label>
                    <select name="supplier_id" id="" class="mt-2 form-select w-full py-3">
                        @foreach ($suppliers as $sr)
                            <option value="{{ $sr['id'] }}">{{ $sr->supplier_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Category</label>
                    <select name="category_id" id="" class="mt-2 form-select w-full py-3">
                        @foreach ($categories as $ct)
                            <option value="{{ $ct['id'] }}">{{ $ct->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit"
                    class="inline-block bg-jevon_ganteng_sekali hover:bg-jevon_ganteng_gila text-white uppercase text-sm tracking-widest font-heading px-8 py-4 mt-6">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection
