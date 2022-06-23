<?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

<ul class="pagination justify-content-end">
    <li class="page-item disabled">
        <a class="page-link" href="javascript:void(0);" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
    <!-- <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0);">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li> -->
    <li class="page-item">
        <a class="page-link" href="javascript:void(0);">Next</a>
    </li>
</ul>





@if ($paginator->lastPage() > 1)
<ul class="pagination justify-content-end">
    <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url(1) }}" class="page-link">Previous</a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <?php
        $half_total_links = floor($link_limit / 2);
        $from = $paginator->currentPage() - $half_total_links;
        $to = $paginator->currentPage() + $half_total_links;
        if ($paginator->currentPage() < $half_total_links) {
            $to += $half_total_links - $paginator->currentPage();
        }
        if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
            $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
        }
        ?>
        @if ($from < $i && $i < $to) <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
            @endif
            @endfor
            <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                <a href="{{ $paginator->url($paginator->lastPage()) }}"><i class="la la-angle-right" aria-hidden="true"></i></a>
            </li>
</ul>
@endif