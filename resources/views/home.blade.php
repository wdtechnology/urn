@extends('app')


@section('content')
    <form method="post" class="urn-form">
        @csrf
        <input type="hidden" name="vote" value="" class="final-vote" required>
        <div class="table-responsive table-borderless mt-3">
            <table class="table table-bordered">
                <tbody>
                    <tr class="m-0">
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">1</button>
                        </td>
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">2</button>
                        </td>
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">3</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">4</button>
                        </td>
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">5</button>
                        </td>
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">6</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">7</button>
                        </td>
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">8</button>
                        </td>
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">9</button>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button class="btn btn-dark urn-button n" type="button">0</button>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="pr-0">
                            <button class="btn btn-light urn-button n" type="button" style="background-color: white!important; color: black;margin:0!important; font-size:12px; width:80px;">BRANCO</button>
                        </td>
                        <td class="pr-0">
                            <button class="btn btn-dark urn-button n" type="button" style="background-color: orange!important; color: black; margin:0!important; width:80px; font-size:12px;">CORRIGE</button>
                        </td>
                        <td>
                            <button class="btn btn-dark urn-button" type="submit" style="background-color: #69E781; width:110px!important; height: 70px!important; margin-top:-10px!important; margin-left:-10px!important; color: #000; font-size: 15px; font-weight:bold!important; margin-top:-18px!important;">CONFIRMA</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
@endsection