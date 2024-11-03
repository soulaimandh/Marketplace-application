<div class="container">
    <div class="pagination">
        {{-- $posts->hasPages() --}}
        @if (1)
                <ul class="pagenation">
                    {{-- $posts->onFirstPage() --}}
                    @if (0)
                        <li class="disabled"><span><i class="fa-solid fa-angle-left"></i> Précédent</span></li>
                    @else
                        {{-- $posts->previousPageUrl() --}}
                        <li class="active"><a href="#" rel="prev"><i class="fa-solid fa-angle-left"></i> Précédent</a></li>
                    @endif

                        <ul class="numbers">
                                <li class="number">
                                    1
                                </li>

                                <li class="number">
                                    2
                                </li>

                                <li class="number">
                                    3
                                </li>

                                <li class="number">
                                    4
                                </li>

                                <li class="number">
                                    5
                                </li>

                                <li class="number">
                                    6
                                </li>

                                <li class="number">
                                    ...
                                </li>

                                <li class="number">
                                    50
                                </li>
                        </ul>


                    {{-- $posts->hasMorePages() --}}
                    @if (1)
                        {{-- $posts->nextPageUrl() --}}
                        <li class="active"><a href="#" rel="next">Suivant <i class="fa-solid fa-angle-right"></i></a></li>
                    @else
                        <li class="disabled"><span>Suivant <i class="fa-solid fa-angle-right"></i></span></li>
                    @endif
                </ul>
        @endif
    </div>
</div>
