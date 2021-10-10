@if ($paginator->hasPages())
<div class="containerPagination">
    <div class="containerPaginationSection">
        <div>Page: {{$paginator->currentPage()}} / {{$paginator->lastPage()}}</div>
    </div>
    <div class="containerPaginationBtn">
        <a class="paginationNav" href="{{$paginator->previousPageUrl()}}">Précédent</a>
        <a href=""></a>

        <a class="paginationNav" href="{{$paginator->nextPageUrl()}}">Suivant</a>
    </div>
</div>


<style>
    .containerPagination {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        text-align: center;
    }
    .containerPaginationSection{
        width: 100%;
        font-size: 1.3rem;
    }
    .containerPaginationBtn{
        width: 100%;
        margin-top: 15px;
    }

    .paginationNav {
        color: #FFFFFF;
        text-decoration: none;
        margin: 10px;
        font-size: 1.4rem;
    }
    .paginationNav:hover{
        color: #EE6352;
    }
</style>

@endif