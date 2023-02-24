unit U_padaria;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  TForm1 = class(TForm)
    lb_pao: TLabel;
    lb_broas: TLabel;
    txt_pao: TEdit;
    txt_broas: TEdit;
    bt_cacular: TButton;
    lb_total: TLabel;
    lb_dez: TLabel;
    txt_total: TEdit;
    txt_dez: TEdit;
    procedure bt_cacularClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  Form1: TForm1;

implementation

{$R *.dfm}

procedure TForm1.bt_cacularClick(Sender: TObject);
 var
  pao,dez,broa,total:double;

begin

 pao:=StrToFloat(txt_pao.Text);
 broa:=StrToFloat(txt_broas.Text);
 total:=(pao*0.12)+(broa*1.50);
 dez:=(total*10)/100;

 txt_total.Text:=FloatToStr(total);
 txt_dez.Text:=FloatToStr(dez);

end;

end.
