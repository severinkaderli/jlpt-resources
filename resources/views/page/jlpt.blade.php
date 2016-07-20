@extends('app')

@section('jlpt-level')
    N{{$jlptLevel}}
@endsection


@section('content')
    <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
        <div class="page-content">
            <div class="mdl-grid">
                @foreach($kanjis as $kanji)
                    <div class="mdl-tooltip" for="kanji-{{$kanji->id}}">{{$kanji->meaning}}</div>
                    <div id="kanji-{{$kanji->id}}" class="mdl-cell mdl-cell--1-col">
                        <div class="kanji-card mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand">
                                <h2 class="mdl-card__title-text">{{$kanji->kanji}}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2">
        <div class="page-content">
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Vocabulary</th>
                    <th class="mdl-data-table__cell--non-numeric">Prounounciation</th>
                    <th class="mdl-data-table__cell--non-numeric">Translation</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">日</td>
                    <td>にち</td>
                    <td>Sun</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-3">
        <div class="page-content">
            The Grammar is real
        </div>
    </section>
@endsection