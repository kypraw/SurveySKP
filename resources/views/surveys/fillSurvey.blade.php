@extends('layouts.master')

@section('content')
    <h3>Sebelum mengisi survey yang Anda pilih, mohon memberikan penilaian terhadap pelayanan yang diberikan oleh Service Desk Pusintek</h3>
    
    <form action="{{route('answers.post')}}" id="survey" method=post>
        <div class="panel panel-default">
        <div class="panel-heading"><p class="title">{{$serviceDesk[0]->title}}
        <p><?php echo($serviceDesk[0]->deskripsi)?></p>
        </div>
            <div class="panel-body">
            <?php $i=0 ?>
            @foreach($serviceDesk as $g)
                <?php $i++ ?>
                <div class="col-md-12 pertanyaan">
                    <div class="col-md-9">
                        <?php if($i == 1){
                            echo("<br>");
                        } ?>
                        <p><?php echo($g->pertanyaan); ?>
                    </div>
                    <div class="col-md-3 radio-button">
                        <fieldset id="{{$g->id}}">
                        <?php if($i == 1){
                            echo("<label for='tingkat_kepuasan'>STP &emsp;TP &nbsp;&nbsp;&ensp;KP &ensp;&emsp;P &ensp;&emsp;SP &ensp;</label><br>");
                        } ?>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="1" required></p>
                        </label>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="2"></p>
                        </label>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="3"></p>
                        </label>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="4"></p>
                        </label>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="5"></p>
                        </label>
                        </fieldset>
                    </div>
                </div>
            @endforeach
            <strong><p id="right-align">STP = Sangat Tidak Puas, TP = Tidak Puas, KP = Kurang Puas, P = Puas, SP = Sangat Puas</strong>
                <div class="form-group col-md-9">
                    <label for="comment">Komentar (Wajib diisi):</label>
                    <textarea class="form-control" rows="5" name="komentar[{{$serviceDesk[0]->survey_id}}]" required></textarea>
                </div>
            </div>
        </div>

        <h3>Silahkan isi Survey di bawah ini</h3>

        @foreach($grouped as $group)
        <div class="panel panel-default">
        <div class="panel-heading"><p class="title">{{$group[0]->survey_id . ". " . $group[0]->title}}
        <p><?php echo($group[0]->deskripsi)?></p>
        </div>
            <div class="panel-body">
            <?php $i=0 ?>
            @foreach($group as $g)
                <?php $i++ ?>
                <div class="col-md-12 pertanyaan">
                    <div class="col-md-9">
                        <?php if($i == 1){
                            echo("<br>");
                        } ?>
                        <p><?php echo($g->pertanyaan); ?>
                    </div>
                    <div class="col-md-3 radio-button">
                        <fieldset id="{{$g->id}}">
                        <?php if($i == 1){
                            echo("<label for='tingkat_kepuasan'>STP &emsp;TP &nbsp;&nbsp;&ensp;KP &ensp;&emsp;P &ensp;&emsp;SP &ensp;</label><br>");
                        } ?>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="1" required></p>
                        </label>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="2"></p>
                        </label>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="3"></p>
                        </label>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="4"></p>
                        </label>
                        <label id="margin_nilai" class="radio-inline">
                            <p><input type="radio" name="nilaipertanyaan[{{$g->id}}]" value="5"></p>
                        </label>
                        </fieldset>
                    </div>
                </div>
            @endforeach
            <strong><p id="right-align">STP = Sangat Tidak Puas, TP = Tidak Puas, KP = Kurang Puas, P = Puas, SP = Sangat Puas</strong>
                <div class="form-group col-md-9">
                    <label for="comment">Komentar (Wajib diisi):</label>
                    <textarea class="form-control" rows="5" name="komentar[{{$group[0]->survey_id}}]" required></textarea>
                </div>
            </div>
        </div>
    @endforeach
    {{csrf_field()}}
    <div class="col-md-12">
        <div class="col-md-4"></div>
        <div class="col-md-2">
            <a href="{{route('surveys')}}" class="btn btn-primary btn-md btn-block">Back</a>
        </div>
        <div class="col-md-2">
            <button id="submit_survey" class="btn btn-md btn-primary btn-block" type="submit">Submit</button>
        </div>
    </div>
    </form>
@endsection

@section('script')
<script>
    $("#survey").on("submit", function(){
        return confirm("Apakah Anda yakin?");
    });
</script>
@endsection