@extends('layouts.app')

@section('title', 'Contacto - UtreBytes')

@section('content')
<div class="container">
    <h1>Contacto</h1>
    <p>Ponte en contacto con nuestro equipo</p>

    <section class="mt-5">
        <h2>Información de Contacto</h2>
        <div class="contact-info">
            <div class="info-item">
                <h3>Dirección</h3>
                <p>Calle Principal, 123<br>Madrid, España</p>
            </div>
            <div class="info-item">
                <h3>Teléfono</h3>
                <p><a href="tel:+34912345678">+34 91 234 5678</a></p>
            </div>
            <div class="info-item">
                <h3>Email</h3>
                <p><a href="mailto:info@utrebytes.com">info@utrebytes.com</a></p>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <h2>Formulario de Contacto</h2>
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="tel" id="phone" name="phone">
            </div>

            <div class="form-group">
                <label for="subject">Asunto</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
        </form>
    </section>

    <section class="mt-5">
        <h2>Horario de Atención</h2>
        <p>Lunes a Viernes: 9:00 - 18:00<br>
        Sábado y Domingo: Cerrado<br>
        Soporte 24/7: <a href="mailto:soporte@utrebytes.com">soporte@utrebytes.com</a></p>
    </section>
</div>
@endsection
