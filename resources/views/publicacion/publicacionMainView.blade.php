<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details Card</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <style>
        .card-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .card {
            width: 50%;
            height: 50vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card-img-top {
            width: auto;
            height: 500px;
            margin: 0 auto;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center; /* Center the text */
        }

        .section {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
<div class="container card-center">
    <div class="card">
        <img src="{{ $post->imagen }}" class="card-img-top" alt="Event Image">
        <div class="card-body">
            <div class="section">
                <h5 class="card-title">Lugar: {{ $post->lugar }}</h5>
                <p class="card-text">Cupo: {{ $post->cupo }}</p>
            </div>
            <div class="section">
                <p class="card-text">Fecha Inicio: {{ $post->fechaInicio->format('d-m-Y H:i') }}</p>
                <p class="card-text">Fecha Fin: {{ $post->fechaFin->format('d-m-Y H:i') }}</p>
            </div>
            <div class="section">
                <p class="card-text">Hora Inicio: {{ $post->horaInicio }}</p>
                <p class="card-text">Hora Fin: {{ $post->horaFin }}</p>
            </div>
            <div>
                <a href="#" class="btn btn-primary mt-auto">Asistir</a>
                <button type="button" class="btn btn-danger mt-auto" data-bs-toggle="modal" data-bs-target="#reportModal">Reportar</button>
            </div>


        </div>
    </div>
</div>
<div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reportModalLabel">Reportar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="confirmButton">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('confirmButton').addEventListener('click', function() {
        alert('Se ha reportado la publicacion!');
        var modal = new bootstrap.Modal(document.getElementById('reportModal'));
        modal.hide();
    });
</script>
</body>
</html>
