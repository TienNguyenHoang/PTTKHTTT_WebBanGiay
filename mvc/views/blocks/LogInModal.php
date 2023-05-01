<div class="modal fade" id="LogInModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width: 400px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#login">Đăng nhập</a></li>
                    <li><a data-toggle="tab" href="#register">Đăng ký</a></li>
                </ul>
                <div class="tab-content">
                    <div id="login" class="tab-pane fade in active">
                        <form action="">
                            <div class="form-group">
                                <label for="username">Tài khoản:</label>
                                <input type="text" class="form-control" id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu:</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-default">Đăng nhập</button>
                        </form>
                    </div>
                    <div id="register" class="tab-pane fade">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Họ tên: <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="phoneNum">Số điện thoại: <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" id="phoneNum" required>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email: <span style="color: red;">*</span></label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ: <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="address" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Tài khoản: <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu: <span style="color: red;">*</span></label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>