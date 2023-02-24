unit U.conversao_dinheiro;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  Tfrm_principal = class(TForm)
    lb_reais: TLabel;
    txt_reais: TEdit;
    lb_real: TLabel;
    lb_conversoes: TLabel;
    lb_dolar: TLabel;
    txt_dolar: TEdit;
    lb_uss: TLabel;
    lb_euro: TLabel;
    txt_euro: TEdit;
    lb_e: TLabel;
    lb_libra: TLabel;
    txt_libra: TEdit;
    lb_l: TLabel;
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
real,dolar,euro,libra:double;
begin
   real:=strtofloat(txt_reais.text);
   if (real<0) then
   begin
   showmessage('[ERRO] Real negativo');
   end
   else
   begin

   dolar:=real/4.20;
   euro:=real/4.50;
   libra:=real/4.90;

   txt_dolar.text:=formatfloat('0.00',dolar);
   txt_euro.text:=formatfloat('0.00',euro);
   txt_libra.text:=formatfloat('0.00',libra);
   end;
end;

end.
