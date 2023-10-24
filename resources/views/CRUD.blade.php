<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('CRUD') }}
    </h2>
</x-slot>
<div>
    @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
</div>
<div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th>Kecacatan</th>
            <th>Jumlah</th>
            <th>Gambar</th>
        </tr>
        @foreach($Items as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->category_id}}</td>
                <td>{{$item->kondisi_id}}</td>
                <td>{{$item->keterangan}}</td>
                <td>{{$item->kecacatan}}</td>
                <td>{{$item->Jumlah}}</td>
                <td>{{$item->Gambar}}</td>
            </tr>
        @endforeach
    </table>
</div>
</x-app-layout>



