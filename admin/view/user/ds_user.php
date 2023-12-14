<div class="admin-content">
    <div class="tiled">
        <h3>DANH SÁCH TÀI KHOẢN</h3>
    </div>
    <table>

        <thead>
            <tr>
                <th>ID User</th>
                <th>Email</th>
                <th>Pass</th>
                <th>name_kh</th>
                <th>gender</th>
                <th>phone</th>
                <th>role</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php  
            foreach ($load_user as $user) {
                extract($user);
                $suaid_user="index.php?admin=suaid_user&id_user=".$id_user;
                $delete_user="index.php?admin=delete_user&id_user=".$id_user;
                $tr = ' <tr>
                <td>'.$id_user.'</td>
                <td>'.$email.'</td>
                <td>'.$pass.'</td>
                <td>'.$name_kh.'</td>
                <td>'.$gender.'</td>
                <td>'.$phone.'</td>
                <td>'.$role.'</td>
                <td class="action-buttons">
                <a class="text-decoration-none" href="'.$delete_user.'"><span class="delete-button" onclick="deleteRow(1)">Xóa</span></a> 
                <a class="text-decoration-none" href="'.$suaid_user.'"> <span class="edit-button" onclick="editRow(1)">Sửa</span></a>
                </td>
            </tr>';
            echo $tr;
            }
        ?>
            <!-- <tr>
                <td>1</td>
                <td>Phòng 101</td>
                <td class="action-buttons">
                    <span class="delete-button" onclick="deleteRow(1)">Xóa</span>
                    <span class="edit-button" onclick="editRow(1)">Sửa</span>
                </td>
            </tr> -->
            <!-- Thêm các dòng khác tương tự -->
        </tbody>
    </table>
</div>