import '../node_modules/bootstrap/dist/css/bootstrap.css';
import './assets/sass/app.sass';
import 'jquery-mask-plugin';

$(function () {
  const btnNewsletterSubscriberSubmit = $('#btn-newsletter-subscriber-submit');
  const inputNewsletterSubscriberEmail = $('#input-newsletter-subscriber-email');

  btnNewsletterSubscriberSubmit.on('click', () => {
    $.ajax(
      {
        method: 'post',
        url: 'https://newsletter.api.bitcriativo.com.br/newsletter',
        accepts: 'Accept: application/json',
        data: {
          "email": inputNewsletterSubscriberEmail.val()
        },
        beforeSend: () => {
          btnNewsletterSubscriberSubmit.addClass('btn-sending').children('span').removeClass('d-none')
        }
      }).done(() => {
        alert('Inscrito com sucesso!')
        btnNewsletterSubscriberSubmit.removeClass('btn-sending').children('span').addClass('d-none')
      }).fail(function (jqXHR, textStatus, msg) {
        alert('Erro ao realizar a inscrição na Newsletter')
        btnNewsletterSubscriberSubmit.removeClass('btn-sending').children('span').addClass('d-none')
      });
  })

  /** Form Contact */

  const btnContactSubmit = $('#btn-contact-submit');
  const inputContactName = $('#input-contact-name');
  const inputContactPhoneNumber = $('#input-contact-phone-number');
  const inputContactEmail = $('#input-contact-email');
  const inputContactMessage = $('#input-contact-message');

  btnContactSubmit.on('click', () => {
    $.ajax(
      {
        method: 'post',
        url: 'https://contact.api.bitcriativo.com.br/contact/send',
        accepts: 'Accept: application/json',
        data: {
          name: inputContactName.val(),
          phoneNumber: inputContactPhoneNumber.val(),
          email: inputContactEmail.val(),
          subject: "Formulário de Contato | Site - Bit Criativo",
          message: inputContactMessage.val()
        },
        beforeSend: () => {
          btnContactSubmit.addClass('btn-sending').children('span').removeClass('d-none')
        }
      }).done(() => {
        alert('Enviado com Sucesso!')
        btnContactSubmit.removeClass('btn-sending').children('span').addClass('d-none')
      }).fail(function (jqXHR, textStatus, msg) {
        console.log(msg)
        alert('Erro ao enviar a mensagem, por favor, tentar novamente!')
        btnContactSubmit.removeClass('btn-sending').children('span').addClass('d-none')
      });

  })

  /** Inputs Masks */
  $('.input-phone-number-mask').mask('+55 00 90000-0000')

});