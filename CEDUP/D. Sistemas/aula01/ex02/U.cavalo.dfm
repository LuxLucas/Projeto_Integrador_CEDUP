object Form1: TForm1
  Left = 0
  Top = 0
  Caption = 'Form1'
  ClientHeight = 166
  ClientWidth = 231
  Color = clBtnFace
  Font.Charset = ANSI_CHARSET
  Font.Color = clWindowText
  Font.Height = -15
  Font.Name = 'Times New Roman'
  Font.Style = [fsBold]
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 17
  object lb_titulo: TLabel
    Left = 40
    Top = 24
    Width = 156
    Height = 17
    Caption = 'Quantidade de Cavalos:'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -15
    Font.Name = 'Times New Roman'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object txt_qtcavalo: TEdit
    Left = 56
    Top = 56
    Width = 121
    Height = 25
    TabOrder = 0
  end
  object bt_calcular: TButton
    Left = 80
    Top = 96
    Width = 75
    Height = 25
    Caption = 'Calcular'
    TabOrder = 1
    OnClick = bt_calcularClick
  end
end
