<?php

/*
 * $totalPost: 전체 게시물 수
 * postPerPage: 1페이지 당 게시물 수
 * pageRange: 최대 노출 페이지 수 (ex. 1 2 3 4 5 ... , << 1 2 3 4 5 >> 등)
 * currentPage: 현재 페이지
 */
function pagination($totalPost, $postPerPage, $pageRange, $currentPage)
{

    $data = range(1, $totalPost);

    $totalPage = ceil($totalPost / $postPerPage); // 총 페이지 수


    $startPostPerPage = ($currentPage - 1) * $postPerPage; // 각 페이지별 첫 게시물 번호
    // (ex. 2페이지 시작 게시물: idx 기준 10번(실제는 11번) 게시물)

    $pageRangeStart = (floor(($currentPage - 1) / $postPerPage) * $postPerPage) + 1;
    // 현재 페이지 기준 pageRange 범위의 시작 페이지
    // (ex. 현재 3페이지면 시작점 1페이지, 현재 9페이지면 시작점 6페이지)

    $pageRangeEnd = $pageRangeStart + $pageRange - 1;
    // 현재 페이지 기준 pageRange 범위의 마지막 페이지
    // (ex. 현재 3페이지면 마지막 5페이지, 현재 9페이지면 마지막 10페이지)

    if ($pageRangeEnd > $totalPage) {
        $pageRangeEnd = $totalPage;
        // totalPage보다 pageRangeEnd가 더 큰 경우
        // (ex. totalPage는 11페이지인데, $pageRangeEnd 계산식에 의해 15페이지가 return 되는 경우)
        // pageRangeEnd에 totalPage 값 할당
    }

    $rs_str = '<nav aria-label="Page navigation example">
                <ul class="pagination">';

    // 첫 페이지
    $rs_str .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=1">First</a></li>';

    // 이전 페이지
    $prevPage = $pageRangeStart - 1;
    if ($prevPage > 1) {
        $rs_str .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $prevPage . '">Prev</a></li>';
    }

    for ($i = $pageRangeStart; $i <= $pageRangeEnd; $i++) {
        if ($currentPage == $i) {
            $rs_str .= '<li class="page-item active" aria-current = "page">
                        <a class="page-link" href ="#">' . $i . '</a >
                        </li >';

        } else {
            $rs_str .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . "?page=" . $i . '">' . $i . '</a></li>';

        }
    }

    $nextPage = $pageRangeEnd + 1;
    if ($nextPage <= $totalPage) {
        // 다음 페이지
        $rs_str .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $nextPage . '">Next</a></li>';
    }

    // 마지막 페이지
    $rs_str .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $totalPage . '">Last</a></li>';

    $rs_str .= '</ul></nav>';

    return $rs_str;
}