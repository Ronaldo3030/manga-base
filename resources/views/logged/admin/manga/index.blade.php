@extends('layout.admin')

@section("title", "Adicionar manga - Dashboard")

@section('content')
@if ($errors->any())
<div class="w-full bg-red-500 px-5 py-2 rounded-md mb-3">
    <ul>
        @foreach ($errors->all() as $error)
        <li class="text-lg text-white">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session('erro'))
<div class="w-full bg-red-500 px-5 py-2 rounded-md mb-3">
    <ul>
        <li class="text-lg text-white">{{ session('erro') }}</li>
    </ul>
</div>
@endif
@if (session('success'))
<div class="w-full bg-green-500 px-5 py-2 rounded-md mb-3">
    <ul>
        <li class="text-lg text-white">{{ session('success') }}</li>
    </ul>
</div>
@endif
<form method="post" action="{{route('admin.manga.store')}}" enctype="multipart/form-data" class="w-full">
    @csrf
    <div class="grid gap-6 mb-6">
        <div>
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
            <input type="text" id="nome" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Solo leveling" required>
        </div>

        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
            <textarea id="message" rows="4" name="description"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Resuma a descrição do manga..."></textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="selectImage">Imagem de
                capa</label>
            <input name="image"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="selectImage" type="file">
        </div>
        <div id="container-image" style="display:none;">
            <h4 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pre-vizualizar imagem de capa</h4>
            <div>
                <img class="w-56 h-96 object-cover" id="preview" src="#" alt="your image" class="mt-3" style="display:none;" />
            </div>
        </div>


        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
    </div>
</form>

@push('script')
<script>
    selectImage.onchange = evt => {
            containerImage = document.getElementById('container-image');
            containerImage.style.display = 'block';
            preview = document.getElementById('preview');
            preview.style.display = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
</script>
@endpush
@endsection