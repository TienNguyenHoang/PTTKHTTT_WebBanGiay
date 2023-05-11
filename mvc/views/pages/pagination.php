<div style="text-align: center; margin: 25px 0;">
    <ul class="pagination pager" style="margin: 0;">
        <li class="previous"><a href="#" style="margin-right: 15px;"><i class="fas fa-chevron-left"></i></a></li>
        <?php
        // print_r($data['category']);
        $pages = $data['product'][1][0][0] / 8;
        $pages = ceil($pages);
        $category = "All";
        if (isset($data['current_category'])) {
            if ($data['current_category'] != "All") {
                $category = $data['current_category'];
            }
        }
        for ($i = 1; $i <= $pages; $i++) {
            if ($i == 1) {
                echo "<li class='pagination-item active'><a href=" . "/WebBanGiay_PTTKHTTT/Products/AllProduct/$category/$i style='margin: 0 4px;'>$i</a></li>";
            } else {
                echo "<li class='pagination-item'><a href=" . "/WebBanGiay_PTTKHTTT/Products/AllProduct/$category/$i style='margin: 0 4px;'>$i</a></li>";
            }
        }
        ?>
        <li class="next"><a href="#" style="margin-left: 15px;"><i class="fas fa-chevron-right"></i></a></li>
    </ul>
</div>
<script>
    $(document).ready(function() {
        $("li.pagination-item").click(function() {
            var url = this.firstElementChild.getAttribute('href');
            $("div.product").load(url);
            return false;
        })
    });
</script>