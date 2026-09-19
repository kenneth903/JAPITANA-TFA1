<?= $this->include('layout/header') ?>

<h1>Kenneth Japitana</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Role</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['full_name']) ?></td>
            <td><?= esc($user['role']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?= $this->include('layout/footer') ?>