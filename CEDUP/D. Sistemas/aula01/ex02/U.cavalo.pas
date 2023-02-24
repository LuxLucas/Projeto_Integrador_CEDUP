unit U.cavalo;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  TForm1 = class(TForm)
    lb_titulo: TLabel;
    txt_qtcavalo: TEdit;
    bt_calcular: TButton;
    procedure bt_calcularClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  Form1: TForm1;

implementation

{$R *.dfm}

procedure TForm1.bt_calcularClick(Sender: TObject);
var
resultado:double;
begin
  resultado:=4*StrToFloat(txt_qtcavalo.text);
  showmessage(FloatToStr(resultado));
end;

end.
