unit U.Viagem_Gasolina;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  Tfrm_principal = class(TForm)
    lb_Kilom: TLabel;
    txt_Kg: TEdit;
    lb_Km: TLabel;
    lb_litro: TLabel;
    txt_litro: TEdit;
    lb_L: TLabel;
    lb_preco: TLabel;
    txt_preco: TEdit;
    lb_cifra: TLabel;
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
kilom,litro,preco,kimli:double;
begin
  kilom:=strtofloat(txt_kg.text);
  litro:=strtofloat(txt_litro.text);
  preco:=strtoFloat(txt_preco.text);
  kimli:=kilom/litro;
  showmessage('Serão gastos '+floattostr(kimli)+' L de combustível'+#13+'Serão gastos '+formatfloat('0.00',(preco*kimli))+' R$');
end;

end.
