<style>
    .list-group-item.active {
        background-color: #ffffff;
    }

    .list-group-item.active:hover {
        background-color: #ffffff;
    }

    .list-group-item:active {
        background-color: #ffffff;

    }

    .list-group-item.active>a {
        color: red;
    }

    .list-group-item {
        border: none;
        cursor: pointer;
    }

    .list-group-item>a {
        text-decoration: none;
        color: #000;
    }

    .list-group-item:hover {
        background-color: #f3f7fa;
    }

    .list-group-item:hover>a {
        color: red;
    }

    .list-group-item.active::before {
        content: '▶';
        color: red;
        display: inline-block;
        font-size: 15px;
        margin-right: 5px;
    }

    .pagination.pager>li>a {
        color: #000;
    }

    .pagination.pager>li.active:hover>a {
        cursor: pointer;
    }

    .pagination.pager>li.active>a {
        color: #ffffff;
        background-color: red;
        border: none;
    }
</style>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const list_group_item = document.querySelectorAll('.list-group-item');
        list_group_item.forEach(element => {
            element.onclick = () => {
                const list_group = document.querySelector('.list-group');
                const list_group_item_active = list_group.querySelector('.active');
                list_group_item_active.classList.remove('active');
                element.classList.add('active');
            }
        })
        const pagination_item = document.querySelectorAll('.pagination-item');
        pagination_item.forEach(element => {
            element.onclick = () => {
                const pager = document.querySelector('.pager');
                const page_group_item_active = pager.querySelector('.pagination-item.active');
                page_group_item_active.classList.remove('active');
                element.classList.add('active');
            }
        });
        $(document).ready(function() {
            $("li.list-group-item").click(function() {
                var url = this.firstElementChild.getAttribute('href');
                $("div.allProduct").load(url);
                return false;
            })
        })

    });
</script>
<div class="container-fluid" style="background-image: linear-gradient(to right top,rgba(0,0,0,0.8) 85%,rgba(75, 70, 70, 0.411)), url(/WebBanGiay_PTTKHTTT/public/img/introduce/introduce_background.jpg); background-size: cover;background-position: center;background-attachment: fixed;">
    <div class="container" style="height: 200px;margin-top: 0;">
        <div style="color: #ffffff;text-align: center;">
            <h1>TẤT CẢ SẢN PHẨM</h1>
            <small><a href="">Trang chủ</a> / Sản phẩm</small>
        </div>
    </div>
</div>
<div class="container-fluid contentmain row" style="margin: 20px 0;background-color: #ecf0f1;margin:0">
    <div class="col-md-2" style="padding:20px;">
        <div class="tab">
            <div style="background-color:#ffffff;font-size:18px;font-weight:bold;padding:10px;margin-bottom:7px"><i class="fas fa-list" style="margin-right: 10px;"></i>Danh Mục</div>
            <ul class="list-group" style="list-style:none">
                <li class="list-group-item active"><a href="/WebBanGiay_PTTKHTTT/Products/AllProduct2/All/1">Tất cả</a></li>
                <?php foreach ($data['category'] as $category) { ?>
                    <li class="list-group-item"><a href="/WebBanGiay_PTTKHTTT/Products/AllProduct2/<?php echo $category['TenHang'] ?>/1"><?php echo $category['TenHang'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="all-content">
            <div class="content">
                <div style="background-color: #e7e9ec;padding:10px;margin: 0 10px;margin-top:20px">
                    <div class="form-input">
                        <label for="">Sắp xếp theo</label>
                        <select name="" id="" class="form-control" style="width: 150px;display: inline-block;margin-left:5px;">
                            <option value="">Tất cả</option>
                            <option value="">Tất cả</option>
                            <option value="">Tất cả</option>

                        </select>
                    </div>
                </div>
                <div class="allProduct">
                    <?php require_once "./mvc/views/pages/allProduct.php" ?>
                    <?php require_once "./mvc/views/pages/pagination.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>