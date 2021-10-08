{{-- @auth --}}
<form class="form_del" action="{{url('post/' .$post->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button class="btnDelete2" type="submit">
        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop-on-hover" colors="primary:#ffffff,secondary:#ee6352" style="width:50px;height:50px">
        </lord-icon>
    </button>
</form>

{{-- @endauth --}}