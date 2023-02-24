unit U.horas_24h;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  Tfrm_principal = class(TForm)
    lb_hora: TLabel;
    txt_horas: TEdit;
    lb_minutos: TLabel;
    txt_minutos: TEdit;
    btn_calcular: TButton;
    procedure btn_calcularClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frm_principal: Tfrm_principal;

implementation

{$R *.dfm}

procedure Tfrm_principal.btn_calcularClick(Sender: TObject);
var
hora,minuto:integer;
begin
  hora:=strtoint(txt_horas.text);
  minuto:=strtoint(txt_minutos.text);

  if (hora>23)or(hora<0)or(minuto>59)or(minuto<0)then
  begin
    showmessage('[ERRO] Horas ou minutos inválido');
  end
  else
  begin
  showmessage('Se passaram '+inttostr((hora*60)+minuto)+' minutos desde a meia noite.');
  end;
end;

end.
