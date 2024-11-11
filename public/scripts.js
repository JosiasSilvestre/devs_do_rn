document.addEventListener("DOMContentLoaded", function() {
    // Mascara para CPF
    const cpfInput = document.querySelector("input[name='cpf']");
    if (cpfInput) {
        cpfInput.addEventListener("input", function(e) {
            let value = e.target.value.replace(/\D/g, "");
            value = value.replace(/(\d{3})(\d)/, "$1.$2");
            value = value.replace(/(\d{3})(\d)/, "$1.$2");
            value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
            e.target.value = value;
        });
    }

    // Validação simples para email
    const emailInput = document.querySelector("input[type='email']");
    if (emailInput) {
        emailInput.addEventListener("blur", function(e) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(e.target.value)) {
                alert("Por favor, insira um email válido.");
            }
        });
    }

    // Impedir datas futuras em datas de filiação
    const dateInput = document.querySelector("input[type='date']");
    if (dateInput) {
        const today = new Date().toISOString().split("T")[0];
        dateInput.setAttribute("max", today);
    }
});
