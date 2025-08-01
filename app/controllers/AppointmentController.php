<?php
require_once __DIR__ . '/../models/AppointmentModel.php';

class AppointmentController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new AppointmentModel($db);
    }

    public function index()
    {
        $appointments = $this->model->getAll();
        include __DIR__ . '/../views/client/client_my_appointments.php'; // Assuming this view lists all appointments
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha = $_POST['fecha'] ?? null;
            $hora = $_POST['hora'] ?? null;
            $cliente = $_POST['cliente'] ?? null;

            if ($fecha && $hora && $cliente) {
                $this->model->create($fecha, $hora, $cliente);

                // 🔄 Redirige al historial para mostrar la cita recién creada
                header('Location: /Self-Management/index.php?controller=appointment&action=history');
                exit;
            } else {
                $error = "Todos los campos son obligatorios.";
                $appointments = $this->model->getAll(); // Para seguir mostrando los datos existentes
                include __DIR__ . '/../views/client/client_appointment_history.php';
            }
        } else {
            // Si es GET, solo muestra el historial y el formulario
            $appointments = $this->model->getAll();
            include __DIR__ . '/../views/client/client_appointment_history.php';
        }
    }

    public function history()
    {
        $appointments = $this->model->getAll();
        include __DIR__ . '/../views/client/client_appointment_history.php';
    }


    public function edit()
    {
        $id = $_GET['id'] ?? null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST['fecha'], $_POST['hora'], $_POST['cliente']);
            header('Location: /Self-Management/index.php?controller=appointment&action=index');
        } else {
            $appointment = $this->model->getById($id);
            include __DIR__ . '/../views/admin/edit_appointment.php';
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;

            if ($id) {
                $this->model->delete($id);
            }
        }

        // Redirigir nuevamente al historial
        header('Location: /Self-Management/index.php?controller=appointment&action=history');
        exit;
    }
}
