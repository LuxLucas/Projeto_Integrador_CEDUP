object Form1: TForm1
  Left = 0
  Top = 0
  Caption = 'Form1'
  ClientHeight = 221
  ClientWidth = 369
  Color = clBtnFace
  Font.Charset = ANSI_CHARSET
  Font.Color = clWindowText
  Font.Height = -15
  Font.Name = 'Times New Roman'
  Font.Style = [fsBold]
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 17
  object lb_pao: TLabel
    Left = 32
    Top = 32
    Width = 99
    Height = 17
    Caption = 'P'#227'es vendidos:'
  end
  object lb_broas: TLabel
    Left = 32
    Top = 96
    Width = 106
    Height = 17
    Caption = 'Broas vendidas:'
  end
  object lb_total: TLabel
    Left = 184
    Top = 32
    Width = 139
    Height = 17
    Caption = 'Total de p'#227'es e broas'
  end
  object lb_dez: TLabel
    Left = 202
    Top = 96
    Width = 99
    Height = 17
    Caption = 'Para poupan'#231'a:'
  end
  object txt_pao: TEdit
    Left = 32
    Top = 55
    Width = 121
    Height = 25
    TabOrder = 0
  end
  object txt_broas: TEdit
    Left = 32
    Top = 119
    Width = 121
    Height = 25
    TabOrder = 1
  end
  object bt_cacular: TButton
    Left = 144
    Top = 172
    Width = 75
    Height = 25
    Caption = 'Calcular'
    TabOrder = 2
    OnClick = bt_cacularClick
  end
  object txt_total: TEdit
    Left = 202
    Top = 55
    Width = 121
    Height = 25
    Enabled = False
    TabOrder = 3
  end
  object txt_dez: TEdit
    Left = 202
    Top = 119
    Width = 121
    Height = 25
    Enabled = False
    TabOrder = 4
  end
end
