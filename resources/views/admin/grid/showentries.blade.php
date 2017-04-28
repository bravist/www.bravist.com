<div class="col-sm-6">
    <div class="dataTables_length" id="example1_length">
        {{-- <label>
            显示 
            <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            数据
        </label> --}}
    </div>
</div>
<div class="col-sm-6">
    <div id="example1_filter" class="dataTables_filter">
        <form id="seach-form" action="" method="GET">
            <label>
                搜索:
                    <input type="search" name="search" class="form-control input-sm" placeholder="关键词" value="{{ request('search') }}" aria-controls="example1">
                    {{ csrf_field() }}
                
            </label>
        </form>
    </div>
</div>