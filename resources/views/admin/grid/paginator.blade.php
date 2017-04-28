<div class="col-sm-5">
    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
        显示总数 {{ $page->total() }} 中的第 {{ $page->firstItem() }} 至 {{ $page->lastItem() }} 条数据
    </div>
</div>

<div class="col-sm-7">
    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
        {{ $page->links() }}
    </div>    
</div>