import "./bootstrap";
import Alpine from "alpinejs";
import toastr from "toastr";
import "toastr/build/toastr.min.css";

window.Alpine = Alpine;
window.toastr = toastr; // This makes toastr globally accessible

Alpine.start();
