unit U.pagar;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  Tfrm_principal = class(TForm)
    lbpeso: TLabel;
    txtpeso: TEdit;
    lbpagar: TLabel;
    txtpagar: TEdit;
    btcalcular: TButton;
    lbcifra: TLabel;
    lbkilo: TLabel;
    lb_aviso1: TLabel;
    lb_aviso2: TLabel;
    lb_aviso3: TLabel;
    procedure btcalcularClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frm_principal: Tfrm_principal;

implementation

{$R *.dfm}

procedure Tfrm_principal.btcalcularClick(Sender: TObject);
var
peso,pagar:double;
begin
  peso:=StrToFloat(txtpeso.Text);
  pagar:=peso*28;
  txtpagar.text:=formatfloat('0.00',pagar);
end;

end.
