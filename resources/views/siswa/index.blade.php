@extends('template')

@section('main')

<div id="siswa">
    <h2>   Siswa</h2>
    <?php  if (!empty($siswa)):?>
        <ul>
            <?php foreach ($siswa as $anak): ?>
                    <li><?= $anak ?></li>
            <?php endforeach ?>         
        </ul>

            <?php else: ?>
                <p>Tidak ada siswa</p>
            <?php endif ?>
</div>



@stop

@section('footer')

<div id="footer">
    <p>&copy; 2020 Belajar.dev</p>
</div>


@stop

